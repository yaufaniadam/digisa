<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CartItemController;
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
    Route::get('{id}', [TransactionController::class, 'show'])->where('id', '[0-9]+')->name('user.transaction_detail');
});

Route::get('logout',[AuthController::class, 'logout'])->name('user.logout');

