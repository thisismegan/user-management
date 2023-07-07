<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

// public routes
Route::get('/', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

//route admin
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
});
