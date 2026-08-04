<?php

namespace App\Console\Commands;

use App\Models\VectorStoreFile;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Laravel\Ai\Stores;
use Throwable;

#[Signature('app:clear-kb')]
#[Description('Delete the existing vector stores and empty the vector_store_files table.')]
class ClearKnowledgeBase extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (! $this->confirm('Are you sure you want to delete the vector stores and clear the local records?', false)) {
            $this->info('Operation cancelled.');
            return;
        }

        $primaryStoreId = config('ai.primary_vector_store_id');
        $secondaryStoreId = config('ai.secondary_vector_store_id');

        if ($primaryStoreId) {
            $this->info("Deleting Primary Vector Store: {$primaryStoreId}");
            try {
                Stores::delete($primaryStoreId);
                $this->info("Primary Vector Store deleted.");
            } catch (Throwable $e) {
                $this->error("Failed to delete Primary Vector Store: {$e->getMessage()}");
            }
        } else {
            $this->warn("No Primary Vector Store ID found in configuration.");
        }

        if ($secondaryStoreId) {
            $this->info("Deleting Secondary Vector Store: {$secondaryStoreId}");
            try {
                Stores::delete($secondaryStoreId);
                $this->info("Secondary Vector Store deleted.");
            } catch (Throwable $e) {
                $this->error("Failed to delete Secondary Vector Store: {$e->getMessage()}");
            }
        } else {
            $this->warn("No Secondary Vector Store ID found in configuration.");
        }

        $this->info("Emptying vector_store_files table...");
        try {
            VectorStoreFile::truncate();
            $this->info("Table emptied.");
        } catch (Throwable $e) {
            $this->error("Failed to empty vector_store_files table: {$e->getMessage()}");
        }

        $this->info("Cleanup complete.");
    }
}
