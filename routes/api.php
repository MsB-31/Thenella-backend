<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\AlbumController;
use App\Http\Controllers\Api\GalleryController;

// Public routes
Route::get('/albums', [AlbumController::class, 'index']);
Route::post('/bookings', [BookingController::class, 'store']);
Route::get('/gallery', [GalleryController::class, 'index']);

// Protected routes (if needed later)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
