<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;

Route::get('/ping', function () {
    return response()->json([
        'message' => 'pong'
    ]);
});

Route::apiResource('books', BookController::class);