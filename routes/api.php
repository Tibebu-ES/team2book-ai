<?php

use App\Http\Controllers\AiController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/prompt', [AiController::class, 'prompt']);
    Route::get('/conversations', [AiController::class, 'conversations']);
    Route::get('/conversations/{id}', [AiController::class, 'showConversation']);
    Route::delete('/conversations/{id}', [AiController::class, 'destroyConversation']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
