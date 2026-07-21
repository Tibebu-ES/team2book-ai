<?php

namespace App\Http\Controllers;

use App\Ai\Agents\Team2BookAgent;
use Illuminate\Http\Request;

class AiController extends Controller
{
    /**
     * Handle the AI prompt request.
     */
    public function prompt(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string',
        ]);

        $agent = new Team2BookAgent();
        $response = $agent->prompt($validated['question']);

        return response()->json([
            'answer' => (string) $response,
        ]);
    }
}
