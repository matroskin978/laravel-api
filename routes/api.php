<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->middleware(['throttle:api', 'auth:sanctum'])->group(function () {
    Route::apiResource('categories', \App\Http\Controllers\Api\V1\CategoryController::class);
    Route::apiResource('posts', \App\Http\Controllers\Api\V1\PostController::class);
});


