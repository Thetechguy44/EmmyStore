<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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
    Route::get('/edit-product/{product}', [ProductController::class, 'edit'])->name('edit.product');
    Route::put('/update-product/{product}', [ProductController::class, 'update'])->name('update.product');
    Route::delete('/delete-product/{product}', [ProductController::class, 'destroy'])->name('delete.product');

    //Route for profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change.password');
    Route::put('/profile/update-settings', [ProfileController::class, 'updateSettings'])->name('profile.update.settings');

    // Route for banners
    Route::get('/banners', [BannerController::class, 'index'])->name('banners');
    Route::get('/create-banner', [BannerController::class, 'create'])->name('create.banner');
    Route::post('/store-banner', [BannerController::class, 'store'])->name('store.banner');
    Route::get('/edit-banner/{banner}', [BannerController::class, 'edit'])->name('edit.banner');
    Route::put('/update-banner/{banner}', [BannerController::class, 'update'])->name('update.banner');
    Route::delete('/delete-banner/{banner}', [BannerController::class, 'destroy'])->name('delete.banner');
});