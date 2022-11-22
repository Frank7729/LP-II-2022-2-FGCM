<?php

use App\Http\Controllers\productController;
use App\Http\Livewire\CategoryLivewire;
use App\Http\Livewire\SupplierLivewire;
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

Route::get('/', [productController::class, 'index'])->name('products.index');
Route::get('category/{category}', [productController::class, 'category'])->name('products.category');
Route::get('product/{product}', [productController::class, 'show'])->name('products.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/categories', CategoryLivewire::class)->name('categories');
    Route::get('/suppliers', SupplierLivewire::class)->name('suppliers');
});
