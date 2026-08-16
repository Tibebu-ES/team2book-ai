<?php

namespace App\Ai\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Tools\Request;
use Stringable;

class ClientDetails implements Tool
{
    /**
     * Get the description of the tool's purpose.
     */
    public function description(): Stringable|string
    {
        return 'Answer questions related to client details (clinic details), including resources/offices/rooms, consumers/professionals, shifts, and more.';
    }

    /**
     * Execute the tool.
     */
    public function handle(Request $request): Stringable|string
    {
        $user = Auth::user();

        Log::info('ClientDetails tool called', [
            'user_email' => $user?->email,
        ]);

        if (!$user) {
             Log::warning('ClientDetails failed: User not authenticated.');
             return 'Error: User not authenticated. Cannot fetch client details.';
        }

        // The API path is 'https://sandbox.team2book.com/webapp/public/api/v1/ai/clientDetails'
        // According to other tools, we use config('ai.team2book_api_base_url')
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'X-User-Email' => $user->email,
        ])->get(config('ai.team2book_api_base_url').'clientDetails');

        if ($response->failed()) {
            Log::error('ClientDetails API call failed', [
                'status' => $response->status(),
                'response' => $response->body(),
            ]);
            return 'Failed to fetch client details from the API.';
        }

        Log::info('ClientDetails API call successful');

        return json_encode($response->json());
    }

    /**
     * Get the tool's schema definition.
     */
    public function schema(JsonSchema $schema): array
    {
        return [];
    }
}
