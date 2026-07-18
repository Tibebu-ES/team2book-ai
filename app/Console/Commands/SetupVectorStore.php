<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
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
        $this->info("Creating Team2BookAI knowledge base ... ");

        $store = Stores::create(
            name: 'Team2BookAI knowledge base',
            description: 'Team2Book AI knowledge base. Documentations and tutorials.',
        );

        $this->info("Vector Store created successfully: {$store->id}");

        $documents = [
            'docs/resources_booking_tutorial_english.md'
        ];

        $bar = $this->output->createProgressBar(count($documents));

        foreach ($documents as $path) {
            $store->add(Document::fromStorage($path));
            $bar->advance();
        }

        $bar->finish();
        $this->newline();

        $this->info("All documents uploaded and indexed");
        $this->info("Vector Store Id: {$store->id}");
        $this->warn("Save this store id in your .env file as VECTOR_STORE_ID");

    }
}
