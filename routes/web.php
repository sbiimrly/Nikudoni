<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;

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

Route::middleware(['auth'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::get('/admin/orders', [AdminController::class, 'orders'])
        ->name('admin.orders');

    Route::get('/admin/menu', [AdminController::class, 'menu'])
        ->name('admin.menu');

    Route::get('/admin/customers', [AdminController::class, 'customers'])
        ->name('admin.customers');
});

// LOGOUT
Route::post('/auth/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::post('/admin/menu/{id}/manage-stock', [AdminController::class, 'manageStock'])
    ->name('admin.menu.manageStock');
