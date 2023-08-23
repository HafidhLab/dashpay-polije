<?php

// use App\Http\Livewire\SuperUser\Dashboard;
// use App\Http\Livewire\SuperUser\Merchant;

use App\Http\Controllers\SuperUser\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/tambah-pengguna', [DashboardController::class, 'create']);
Route::post('/create-user', [DashboardController::class, 'store'])->name('store');
Route::get('/edit-user/{user}', [DashboardController::class, 'edit'])->name('edit');
Route::put('/update-user/{user}', [DashboardController::class, 'update'])->name('update');
Route::delete('/delete-user/{user}', [DashboardController::class, 'destroy'])->name('delete');


Route::get('/create-merchant/{id}', [DashboardController::class, 'createMerchant'])->name('create.merchant');
Route::post('/store-merchant', [DashboardController::class, 'storeMerchant'])->name('store.merchant');