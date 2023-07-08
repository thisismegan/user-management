<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\ProductController;

// public routes
Route::get('/', [AuthController::class, 'index'])->name('login-page');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('register', [RegisterController::class, 'create'])->name('register-page');
Route::post('register', [RegisterController::class, 'store'])->name('register');
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

//route admin
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('delete-product', [ProductController::class, 'deleteProduct'])->name('delete-product');
        Route::resource('product', ProductController::class);
        Route::post('delete-image', [ProductController::class, 'deleteImage'])->name('delete-image');
    });
});
