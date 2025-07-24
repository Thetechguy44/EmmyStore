<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthenticationSessionController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [AuthenticationSessionController::class, 'create'])
    ->name('login');

Route::post('/login', [AuthenticationSessionController::class, 'store'])
    ->name('login.store');

Route::post('/logout', [AuthenticationSessionController::class, 'destroy'])
    ->name('logout');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/create-product', [ProductController::class, 'create'])->name('create.product');
    Route::post('/store-product', [ProductController::class, 'store'])->name('store.product');
    // Add more authenticated routes here
});