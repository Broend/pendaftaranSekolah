<?php

use App\Http\Controllers\StudetsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', StudetsController::class);
