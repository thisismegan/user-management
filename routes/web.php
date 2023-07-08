<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\HomeController;

// public routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'index'])->name('login-page');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('register', [RegisterController::class, 'create'])->name('register-page');
Route::post('register', [RegisterController::class, 'store'])->name('register');
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

//route admin
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('delete-product', [ProductController::class, 'deleteProduct'])->name('delete-product');
        Route::resource('product', ProductController::class)->except(['destroy']);
        Route::post('delete-image', [ProductController::class, 'deleteImage'])->name('delete-image');
        Route::resource('category', CategoryController::class)->except(['create', 'show', 'edit', 'destroy']);
        Route::post('delete-category', [CategoryController::class, 'deleteCategory'])->name('delete-category');
        Route::resource('user', UserController::class)->except('show', 'destroy');
        Route::post('delete-user', [UserController::class, 'deleteUser'])->name('delete-user');
    });
});
