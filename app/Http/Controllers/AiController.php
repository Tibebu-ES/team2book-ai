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
            'conversation_id' => 'nullable|string',
        ]);

        $agent = new Team2BookAgent();

        if ($validated['conversation_id'] ?? null) {
            $agent->continue($validated['conversation_id'], $request->user());
        } else {
            $agent->forUser($request->user());
        }

        $response = $agent->prompt($validated['question']);

        return response()->json([
            'answer' => (string) $response,
            'conversation_id' => $agent->currentConversation(),
        ]);
    }

    /**
     * Get the user's past conversations.
     */
    public function conversations(Request $request)
    {
        return response()->json(
            $request->user()->conversations()->latest()->get()
        );
    }
}
