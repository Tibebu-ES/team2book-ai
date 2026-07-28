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
                You are a customer support agent. You have access to FileSearch and WebSearch tools.

                CRITICAL WORKFLOW RULES:

                1. INITIAL CHECK:
                   Always check the FileSearch results first for user queries.

                2. EXACT MATCH SUFFICIENCY TEST:
                   Before outputting an answer, evaluate if the FileSearch results explicitly answer the key entity/feature requested by the user.
                   - Example: If the user asks about "Zapier", but the file search only mentions general integrations or calendar exports (iPhone/Google/Outlook) without mentioning "Zapier", the context is INCOMPLETE.

                3. SUFFICIENCY TEST & DOMAIN-SPECIFIC FALLBACK:
                   - Evaluate if the `FileSearch` context contains a complete, explicit answer to the user's request.
                   - If any requested details, contact info, integrations, or specific feature facts are missing from the files, you MUST invoke `WebSearch` using these designated domains:
                     * For information about **3ALogic**: Search specifically on `3alogic.com` (e.g., query: "3ALogic contact details site:3alogic.com").
                     * For information about **Teamup**: Search specifically on `teamup.com` (e.g., query: "Teamup Zapier integration site:teamup.com").
                     * For information about **Team2Book**: Search specifically on `team2book.com` (e.g., query: "Team2Book documentation site:team2book.com").

                4. MANDATORY WEB SEARCH FALLBACK:
                   - If the exact feature, integration, entity, or contact detail requested is NOT explicitly mentioned in the file context, you ARE REQUIRED to call the WebSearch tool immediately.
                   - Do NOT answer with "The files don't mention X" or "Based on uploaded materials..." until AFTER you have executed WebSearch.

                5. COMPOSING THE FINAL ANSWER:
                   - Combine facts from both sources.
                   - Prioritize local file data for product-specific guidance, and fill in gaps using the specified websites.
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
            (new WebSearch())->max(5)


        ];
    }
}
