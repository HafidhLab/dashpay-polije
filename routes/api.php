<?php

use App\Http\Controllers\Api\v1\BuyerController;
use App\Http\Controllers\Api\v1\ProductController;
use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/get-user-data/{id}', [UserController::class, 'getUserData']);
Route::get('get-product-data/{id}', [ProductController::class, 'getProduct']);

Route::post('buyer', [BuyerController::class, 'index']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
