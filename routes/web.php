<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\ProductController;
use App\Http\Controllers\User\AuthController;
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
Route::get('login', [AuthController::class, 'login'])->name('public.login');
Route::post('login', [AuthController::class, 'loginAttempt'])->name('public.attempt_login');

Route::get('register', [AuthController::class, 'register'])->name('public.register');
Route::post('register', [AuthController::class, 'registration'])->name('public.register_new_account');

Route::get('forgot-password', [AuthController::class, 'forgotPasswordForm'])->name('public.forgot_password');
Route::post('forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');
Route::get('password-reset/{token}', [AuthController::class, 'resetPasswordForm'])->name('password.reset');
Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('password.update');


Route::prefix('arsip')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('public.product_collections');
    Route::get('{id}', [ProductController::class, 'show'])->where('id', '[0-9]+')->name('public.product_detail');
});

Route::prefix('image')->group(function () {
    Route::get('product-thumbnail', [FileController::class, 'productThumbnail'])->name('public.product_thumbnail');
});

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuthController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'loginAttempt'])->name('admin.attempt_login');
});
