<?php

use App\Http\Controllers\PostController;
use App\Http\Livewire\CategoryLivewire;
use App\Http\Livewire\TagLivewire;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');
Route::get('post/{post}', [PostController::class, 'show'])->name('posts.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/categories', [CategoryLivewire::class, ''])->name('categories');
    Route::get('/tags', TagLivewire::class)->name('tags');

});
