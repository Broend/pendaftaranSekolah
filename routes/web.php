<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudetsController;
use App\Http\Controllers\DashboardController;


Route::resource('students', StudetsController::class);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.act');
Route::get('/register', [AuthController::class, 'register'])->name('register.pg');
Route::post('/register', [AuthController::class, 'registerAction'])->name('register');

Route::get('profil', [BaseController::class, 'profil'])->name('profil');
Route::get('/', function () {
    return redirect()->route('profil');
});
Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('contact', [ContactController::class, 'contact'])->name('contact');
    Route::post('contact', action: [ContactController::class, 'contactAction'])->name('contact.action');
    Route::get('/daftar', [BaseController::class, 'daftar']);
    Route::post('/daftar', [BaseController::class, 'daftarFunc'])->name('daftar.func');

    Route::prefix('admin')->group(function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('admin');
        Route::resource('students', StudetsController::class);
        // Route::get('cek/students', [StudetsController::class, 'cek']);
    });
});
