<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Laravel\Ai\Files\Document;
use Laravel\Ai\Stores;

#[Signature('app:setup-vector-store')]
#[Description('Create knowledge base from documentations.')]
class SetupVectorStore extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $storeId = config('ai.vector_store_id');

        if ($storeId) {
            $this->info("Updating existing Vector Store: {$storeId}");
            $store = Stores::get($storeId);
        } else {
            $this->info("Creating new Vector Store...");
            $store = Stores::create(
                name: 'Team2BookAI knowledge base',
                description: 'Team2Book AI knowledge base. Documentations and tutorials.',
            );
            $this->warn("Save this store id in your .env: {$store->id}");
        }

        // 1. Get all files from the 'docs' directory in the 'private' storage disk
        $documents = Storage::disk('local')->files('docs');

        // 2. Loop and upload
        foreach ($documents as $path) {
            // Optional: Filter for specific extensions like .md or .pdf, .docx
            if (! (str_ends_with($path, '.md') || str_ends_with($path, '.pdf') || str_ends_with($path, '.docx')) ) {
                continue;
            }

            $this->info("Uploading: {$path}");
            $store->add(Document::fromStorage($path, 'local'));
        }

        $this->info("Sync complete.");

    }
}
