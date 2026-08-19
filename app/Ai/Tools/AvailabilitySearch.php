<?php

namespace App\Ai\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\JsonSchema\Types\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Tools\Request;
use Stringable;

class AvailabilitySearch implements Tool
{
    /**
     * Get the description of the tool's purpose.
     */
    public function description(): Stringable|string
    {
        return 'Search for consumers or professionals availability or non-availability status. Useful for questions like "Is Dr X available today?" or "Is Dr X not available this weekend?".';
    }

    /**
     * Execute the tool.
     */
    public function handle(Request $request): Stringable|string
    {
        $startDate = $request['start_date'] ?? null;
        $endDate = $request['end_date'] ?? null;
        $user = Auth::user();

        Log::info('AvailabilitySearch tool called', [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'user_email' => $user?->email,
        ]);

        if (!$user) {
             Log::warning('AvailabilitySearch failed: User not authenticated.');
             return 'Error: User not authenticated. Cannot fetch availability status.';
        }

        $apiUrl = config('ai.team2book_api_base_url').'consumerEvents';

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'X-User-Email' => $user->email,
        ])->get($apiUrl, [
            'start' => $startDate,
            'end' => $endDate,
        ]);

        if ($response->failed()) {
            Log::error('AvailabilitySearch API call failed', [
                'status' => $response->status(),
                'response' => $response->body(),
            ]);
            return 'Failed to fetch availability information from the API.';
        }

        Log::info('AvailabilitySearch API call successful');

        return json_encode($response->json());
    }

    /**
     * Get the tool's schema definition.
     *
     * @return array<string, Type>
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'start_date' => $schema->string('The start date of the period (YYYY-MM-DD).'),
            'end_date' => $schema->string('The end date of the period (YYYY-MM-DD).'),
        ];
    }
}
