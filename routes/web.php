<?php

use App\Ai\Agents\Team2BookAgent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ai', function () {
    $response = (new Team2BookAgent())->prompt('How does resource booking work?');
    return (string) $response;
});
