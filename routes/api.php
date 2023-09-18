<?php

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\Api\v1\BuyerController;
use App\Http\Controllers\Api\v1\ProductController;
use App\Http\Controllers\Api\v1\UserController;
use App\Http\Controllers\Api\v1\WalletController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/get-user-data/{id}', [UserController::class, 'getUserData']);
Route::get('get-product-data/{id}', [ProductController::class, 'getProduct']);

Route::get('/list-user', [UserController::class, 'getUser']);
Route::post('user-role', [UserController::class, 'getUserByRole']);

Route::post('buyer', [BuyerController::class, 'index']);
Route::post('/check-total-price-product', [BuyerController::class, 'checkTotalPriceProduct']);

Route::get('/wallet', WalletController::class);
Route::post('/register', [UserController::class, 'register']);


// Authentication
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('user', function (Request $request) {
    return $request->user;
});
