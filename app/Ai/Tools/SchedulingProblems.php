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

class SchedulingProblems implements Tool
{
    /**
     * Get the description of the tool's purpose.
     */
    public function description(): Stringable|string
    {
        return 'Search for and explain scheduling problems, errors, or issues (e.g., no resource left) for a given period of time.';
    }

    /**
     * Execute the tool.
     */
    public function handle(Request $request): Stringable|string
    {
        $startDate = $request['start_date'] ?? null;
        $endDate = $request['end_date'] ?? null;
        $user = Auth::user();

        Log::info('SchedulingProblems tool called', [
            'start_date' => $startDate,
            'end_date' => $endDate,
            'user_email' => $user?->email,
        ]);

        if (!$user) {
             Log::warning('SchedulingProblems failed: User not authenticated.');
             return 'Error: User not authenticated. Cannot fetch scheduling problems.';
        }

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'X-User-Email' => $user->email,
        ])->get(config('ai.team2book_api_base_url').'schedulingProblems', [
            'start' => $startDate,
            'end' => $endDate,
        ]);

        if ($response->failed()) {
            Log::error('SchedulingProblems API call failed', [
                'status' => $response->status(),
                'response' => $response->body(),
            ]);
            return 'Failed to fetch scheduling problems from the API.';
        }

        Log::info('SchedulingProblems API call successful');

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
