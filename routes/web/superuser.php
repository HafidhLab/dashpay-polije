<?php

// use App\Http\Livewire\SuperUser\Dashboard;
// use App\Http\Livewire\SuperUser\Merchant;

use App\Http\Controllers\SuperUser\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/tambah-pengguna', [DashboardController::class, 'create']);
Route::post('/create-user', [DashboardController::class, 'store'])->name('store');
// Route::get('/merchant', Merchant::class)->name('merchant');