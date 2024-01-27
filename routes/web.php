<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('public.home');
Route::get('login', function () {
});

Route::prefix('arsip')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('public.product_collections');
    Route::get('{id}', [ProductController::class, 'show'])->where('id', '[0-9]+')->name('public.product_detail');
});

Route::prefix('image')->group(function () {
    Route::get('product-thumbnail', [FileController::class, 'productThumbnail'])->name('public.product_thumbnail');
});
