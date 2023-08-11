<?php

use App\Http\Controllers\Select2\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->name('users.')->group(function() {
    Route::post('user', [UserController::class, 'userRole'])->name('user');
});
