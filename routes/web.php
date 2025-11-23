<?php

use Illuminate\Support\Facades\Route;

Route::get('/Beranda', function () {
    return view('welcome');
})->name('home.page');

Route::get('/Signin', function () {
    return view('signin'); //LOGIN PAGE
})->name('signin.page');

Route::get('/Menu', function () {
    return view('menu');
})->name('menu.page');
