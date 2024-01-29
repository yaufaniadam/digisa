<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'title';
    return view('admin.pages.login')
        ->with(compact('title'));
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('admin.product_index');
    Route::get('create', [ProductController::class, 'create'])->name('admin.create_product');
    Route::post('store', [ProductController::class, 'store'])->name('admin.store_product');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->where('id', '[0-9]+')->name('admin.edit_product');
    Route::put('update/{id}', [ProductController::class, 'update'])->where('id', '[0-9]+')->name('admin.update_product');
    Route::delete('delete/{id}', [ProductController::class, 'delete'])->where('id', '[0-9]+')->name('admin.delete_product');
});

Route::prefix('transactions')->group(function () {
    Route::get('/', [TransactionController::class, 'index'])->name('admin.transaction_index');
    Route::get('{id}', [TransactionController::class, 'show'])->where('id', '[0-9]+')->name('admin.detail_transaction');
    Route::post('{id}/selesai', [TransactionController::class, 'completeTransaction'])->where('id', '[0-9]+')->name('admin.complete_transaction');
});

Route::prefix('groups')->group(function () {
    Route::get('create', [GroupController::class, 'create'])->name('admin.create_group');
    Route::post('create', [GroupController::class, 'store'])->name('admin.store_group');
    Route::get('by-name', [GroupController::class, 'getGroupByName'])->name('admin.get_group_by_name');
});

Route::prefix('categories')->group(function () {
    Route::get('create', [CategoryController::class, 'create'])->name('admin.create_category');
    Route::post('create', [CategoryController::class, 'store'])->name('admin.store_category');
    Route::get('by-name', [CategoryController::class, 'getCategoryByName'])->name('admin.get_category_by_name');
});
