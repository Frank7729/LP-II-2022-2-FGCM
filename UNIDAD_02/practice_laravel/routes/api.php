<?php

use App\Http\Controllers\schoolController;
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

Route::get('/schools', [schoolController::class, 'index']);
Route::post('/schools', [schoolController::class, 'store']);
Route::put('/schools/{school}', [schoolController::class, 'update']);
Route::delete('/schools/{school}', [schoolController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
