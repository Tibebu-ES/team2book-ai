<?php

namespace App\Console\Commands;

use App\Ai\Agents\Team2BookAgent;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Laravel\Ai\Streaming\Events\TextDelta;
use function Laravel\Prompts\info;
use function Laravel\Prompts\stream;
use function Laravel\Prompts\task;
use function Laravel\Prompts\text;
use function Laravel\Prompts\title;

#[Signature('app:chat')]
#[Description('Command description')]
class Chat extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        title('🤖 Personal Assistant');

        info('Welcome! I\'m your Team2book AI assistant. Type "exit" to quit.');
        $this->newLine();


        $assistant = Team2BookAgent::make();

        while (true) {
            $input = text(
                label: 'You',
                placeholder: 'Ask me anything...',
                required: true,
            );

            if (strtolower(trim($input)) === 'exit') {
                info('Goodbye! 👋');
                break;
            }

            $this->newLine();

            $events = task('Thinking...', function () use ($assistant, $input) {
                $collected = [];

                $assistant->stream($input)->each(function ($event) use (&$collected) {
                    $collected[] = $event;
                });

                return $collected;
            });

            $output = stream();

            foreach ($events as $event) {
                if ($event instanceof TextDelta) {
                    $output->append($event->delta);
                }
            }

            $output->close();

            $this->newLine();
        }
    }
}
