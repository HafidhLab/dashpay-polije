<?php

use App\Http\Controllers\Auditor\DasboardController;
use App\Http\Livewire\Auditor\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [DasboardController::class, 'index'])->name('dashboard');
Route::get('merchant-transaction/{name}', [DasboardController::class, 'show'])->name('show');