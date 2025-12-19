<?php

use Illuminate\Support\Facades\Route;

// Group all auth routes under /auth
Route::prefix('auth')->group(function () {
    require __DIR__ . '/apiAuth.php';
});

// Example protected route outside auth
Route::middleware('auth:sanctum')->get('/user', function (\Illuminate\Http\Request $request) {
    return $request->user();
});
