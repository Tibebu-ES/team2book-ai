<?php

namespace App\Ai\Middleware;

use Laravel\Ai\Responses\AgentResponse;

class StripCitationMarkersMiddleware
{
    /**
     * Handle the incoming prompt and response.
     *
     * @param  mixed  $prompt
     * @param  callable  $next
     * @return mixed
     */
    public function __invoke($prompt, $next)
    {
        return $next($prompt)->then(function (AgentResponse $response) {
            // Remove markers like 【...】, filecite:..., turnXfileY, etc.
            $patterns = [
                '/【\d+(?::\d+)?†[^】]*】/u', // OpenAI standard citations like 【12†source】
                '/【[^】]*】/u',             // Any other content in bold brackets
                '/filecite[^]*/u',     // Specific filecite markers mentioned by user
                '/turn\d+file\d+/i',       // Internal turn/file references
            ];

            $response->text = preg_replace($patterns, '', $response->text);
            $response->text = trim($response->text);

            return $response;
        });
    }
}
