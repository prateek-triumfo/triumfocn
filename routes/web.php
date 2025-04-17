<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [LoginController::class, 'registeruser'])->name('register');
Route::post('/register', [LoginController::class, 'store']);