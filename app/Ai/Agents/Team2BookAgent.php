<?php

namespace App\Ai\Agents;

use Laravel\Ai\Concerns\RemembersConversations;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\Conversational;
use Laravel\Ai\Contracts\HasTools;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Messages\Message;
use Laravel\Ai\Promptable;
use Laravel\Ai\Providers\Tools\FileSearch;
use Laravel\Ai\Providers\Tools\WebSearch;
use Stringable;

class Team2BookAgent implements Agent, Conversational, HasTools
{
    use Promptable, RemembersConversations;

    /**
     * Get the instructions that the agent should follow.
     */
    public function instructions(): Stringable|string
    {
        return <<<'PROMPT'
                You are a friendly, professional customer support agent.

                Guidelines:
                - For how to questions, use the FileSearch Tool to find specific documentation.
                - Always search the uploaded files first.
                - If the uploaded files fully answer the question, answer using them.
                - If the uploaded files do not contain enough information, automatically perform a web search.
                - Never tell the user that the information was not found in the uploaded files until after you have also searched the web.
                - When using both sources, prioritize the uploaded files and use the web only to fill missing information.
                PROMPT;

    }

    /**
     * Get the tools available to the agent.
     *
     * @return Tool[]
     */
    public function tools(): iterable
    {
        return [
            new FileSearch(stores: [config('ai.vector_store_id')]),
            (new WebSearch())->allow(
                [
                    'team2book.com',
                    'teamup.com',
                    '3alogic.com'
                ]
            )
        ];
    }
}
