<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudetsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', StudetsController::class);
//dwadwadawdwa
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginAction'])->name('login');
