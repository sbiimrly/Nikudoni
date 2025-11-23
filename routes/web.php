<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// HALAMAN BERANDA
Route::get('/Beranda', function () {
    return view('welcome');
})->name('home.page');

// LOGIN PAGE (GET)
Route::get('/auth/Signin', [AuthController::class, 'showLoginForm'])
    ->name('signin.page');

// LOGIN PROCESS (POST)
Route::post('/auth/Signin', [AuthController::class, 'login'])
    ->name('signin.post');

// SIGNUP PAGE (GET)
Route::get('/auth/Signup', [AuthController::class, 'showSignupForm'])
    ->name('signup.page');

// SIGNUP PROCESS (POST)
Route::post('/auth/Signup', [AuthController::class, 'signup'])
    ->name('signup.post');

// MENU PAGE
use App\Http\Controllers\Pages\MenuController;

Route::get('/menu', [\App\Http\Controllers\Pages\MenuController::class, 'index'])
    ->name('menu.page');

