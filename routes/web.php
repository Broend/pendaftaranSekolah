<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudetsController;
use Illuminate\Support\Facades\Route;


Route::resource('students', StudetsController::class);
//dwadwadawdwa
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register.pg');
Route::post('/register', [AuthController::class, 'registerAction'])->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
