<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\ProductController;

// public routes
Route::get('/', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

//route admin
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::post('delete-product', [ProductController::class, 'deleteProduct'])->name('delete-product');
    Route::resource('product', ProductController::class);
    Route::post('delete-image', [ProductController::class, 'deleteImage'])->name('delete-image');
});
