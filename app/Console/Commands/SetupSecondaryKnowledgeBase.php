<?php

namespace App\Console\Commands;

use App\Models\VectorStoreFile;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Laravel\Ai\Exceptions\RateLimitedException;
use Laravel\Ai\Files\Document;
use Laravel\Ai\Stores;
use Throwable;

#[Signature('app:secondary-kb')]
#[Description('Create Secondary knowledge base if not created and add files.')]
class SetupSecondaryKnowledgeBase extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $storeId = config('ai.secondary_vector_store_id');

        if ($storeId) {
            $this->info("Updating existing Secondary Knowledge Base: {$storeId}");
            $store = Stores::get($storeId);
        } else {
            $this->info("Creating new Vector Store for the Secondary Knowledge Base.");
            $store = Stores::create(
                name: 'Team2BookAI Secondary knowledge base',
                description: 'Team2Book AI Secondary knowledge base. Files from external sources like Teamup.com ',
            );
            $this->warn("Save this store id in your .env as SECONDARY_VECTOR_STORE_ID: {$store->id}");
        }

        // 1. Get all files from the 'primary-knowledge-base' directory in the 'private' storage disk
        $documents = Storage::disk('local')->files('secondary-knowledge-base');

        $acceptedExtensions = ['*.md', '*.pdf', '*.docx', '*.str', '*.doc', '*.xls', '*.xlsx', '*.ppt', '*.pptx'];

        $bar = $this->output->createProgressBar(count($documents));

        // 2. Loop and upload
        foreach ($documents as $path) {
            // Filter for specific extensions (case-insensitive)
            if (! Str::is($acceptedExtensions, $path, true)) {
                continue;
            }

            $this->info("Uploading: {$path}");

            if (VectorStoreFile::where('file_path', $path)->exists()) {
                $this->info("Skipping already added file: {$path}");
                $bar->advance();
                continue;
            }

            $maxRetries = 3;
            $retryCount = 0;
            $success = false;

            while (! $success && $retryCount < $maxRetries) {
                try {
                    $store->add(Document::fromStorage($path, 'local'));
                    $success = true;
                } catch (RateLimitedException|Throwable $e) {
                    $retryCount++;
                    if ($retryCount >= $maxRetries) {
                        $this->error("\nFailed to upload {$path} after {$maxRetries} attempts: {$e->getMessage()}");
                        throw $e;
                    }

                    $waitSeconds = 60;
                    $this->warn("\nRate limit or timeout hit. Waiting {$waitSeconds} seconds before retry #{$retryCount}...");
                    sleep($waitSeconds);
                }
            }

            VectorStoreFile::create(['file_path' => $path, 'type' => 'secondary']);

            $bar->advance();
        }

        $bar->finish();

        $this->info("Sync complete.");

    }
}
