<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TarotController;

// Auth routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes (harus login)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [TarotController::class, 'dashboard'])->name('dashboard');
    Route::post('/draw', [TarotController::class, 'draw'])->name('tarot.draw');
    Route::get('/history', [TarotController::class, 'history'])->name('tarot.history');
    Route::get('/history/{id}', [TarotController::class, 'show'])->name('tarot.show');
});

// Redirect root ke dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});