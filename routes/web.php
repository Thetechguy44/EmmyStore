<?php

use Illuminate\Support\Facades\Route;
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

    // Add more authenticated routes here
});