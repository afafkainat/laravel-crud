<?php

use App\Http\Controllers\Api\DeleteController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UpdateController;
use App\Http\Controllers\Api\GetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('posts/show/{id?}', [GetController::class, 'show']);
Route::post('posts/insert', [PostController::class, 'store']);
Route::put('posts/update/{id}', [UpdateController::class, 'update']);
Route::delete('posts/delete/{id}', [DeleteController::class, 'destroy']);

// Route::apiResource('posts',PostController::class);
