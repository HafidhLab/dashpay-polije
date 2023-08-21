<?php

use App\Http\Controllers\Merchant\{DashboardController, TopupController, TransactionController, ProductController};
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', DashboardController::class)->name('dashboard');
Route::resource('transaction', TransactionController::class)->except('destroy');
Route::get('/destroy/{id}', [TransactionController::class, 'destroy'])->name('transaction.destroy');

Route::resource('product', ProductController::class)->except('destroy');
Route::get('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');


Route::get('/topup', [TopupController::class, 'index'])->name('topup.index');
Route::post('/topup', [TopupController::class, 'store'])->name('topup.saldo');
