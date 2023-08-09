<?php

use App\Http\Controllers\Merchant\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', DashboardController::class)->name('dashboard');
// Route::get('/transaction', )