<?php

use App\Http\Livewire\Auditor\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', Dashboard::class)->name('dashboard');