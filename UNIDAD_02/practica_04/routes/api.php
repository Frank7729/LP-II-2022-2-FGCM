<?php

use App\Http\Controllers\categoryController;
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
/*
Route::get('/categories', [categoryController::class, 'index']);
Route::post('/categories', [categoryController::class, 'store']);
Route::put('/categories/{category}', [categoryController::class, 'update']);
Route::delete('/categories/{category}', [categoryController::class, 'destroy']);
*/
Route::apiResource('categories', categoryController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
