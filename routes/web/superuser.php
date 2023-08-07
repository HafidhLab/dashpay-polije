<?php

use App\Http\Livewire\SuperUser\Dashboard;
use App\Http\Livewire\SuperUser\Merchant;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/merchant', Merchant::class)->name('merchant');