<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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

        // 1. Get all files from the 'knowledge-base' directory in the 'private' storage disk
        $documents = Storage::disk('local')->files('knowledge-base');

        $acceptedExtensions = ['*.md', '*.pdf', '*.docx', '*.str', '*.doc', '*.xls', '*.xlsx', '*.ppt', '*.pptx'];

        // 2. Loop and upload
        foreach ($documents as $path) {
            // Filter for specific extensions (case-insensitive)
            if (! Str::is($acceptedExtensions, $path, true)) {
                continue;
            }

            $this->info("Uploading: {$path}");
            $store->add(Document::fromStorage($path, 'local'));
        }

        $this->info("Sync complete.");

    }
}
