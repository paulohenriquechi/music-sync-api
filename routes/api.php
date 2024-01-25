<?php

use App\Http\Controllers\API\V1\AlbumController;
use App\Http\Controllers\API\V1\ArtistController;
use App\Http\Controllers\API\V1\SongController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function() {
    Route::post('/signup', [AuthController::class, 'signup']);
    Route::post('/signin', [AuthController::class, 'signin']);
    Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    Route::apiResource('/artists', ArtistController::class);
    Route::apiResource('/albums', AlbumController::class);
    Route::apiResource('/songs', SongController::class);
});

