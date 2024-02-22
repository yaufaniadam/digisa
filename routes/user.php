<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CartItemController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\TransactionController;
use Illuminate\Support\Facades\Route;

Route::prefix('carts')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('user.cart');
    Route::get('checkout', [TransactionController::class, 'checkout'])->name('user.proceed_to_payment');
    Route::post('checkout', [TransactionController::class, 'placeOrder'])->name('user.place_order');
    Route::delete('{id}/hapus-barang', [CartItemController::class, 'removeFromCart'])->where('id', '[0-9]+')->name('user.remove_item_from_cart');
});

Route::prefix('products')->group(function () {
    Route::get('{id}/tambah-ke-keranjang', [CartController::class, 'addToCart'])->where('id', '[0-9]+')->name('user.add_product_to_cart');
});

Route::prefix('transactions')->group(function () {
    Route::get('/', [TransactionController::class, 'index'])->name('user.transactions');
    Route::get('{id}', [TransactionController::class, 'show'])->where('id', '[0-9]+')->name('user.transaction_detail');
    Route::get('download-file/{id}', [FileController::class, 'download'])->where('id', '[0-9]+')->name('user.download_file');
    Route::get('unduh-file', [TransactionController::class, 'paidTransactionFiles'])->name('user.paid_transaction_files');
});

Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'show'])->name('user.profile');
    Route::post('update', [ProfileController::class, 'update'])->name('user.update_profile');
    Route::get('change-password', [ProfileController::class, 'changePassword'])->name('user.edit_password');
    Route::post('update-password', [ProfileController::class, 'updatePassword'])->name('user.update_password');
});

Route::get('logout', [AuthController::class, 'logout'])->name('user.logout');
