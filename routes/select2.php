<?php

use App\Http\Controllers\Select2\ProductController;
use App\Http\Controllers\Select2\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->name('users.')->group(function() {
    Route::post('user', [UserController::class, 'userRole'])->name('user');
});

Route::post('product',[ProductController::class, 'products'] )->name('product');
