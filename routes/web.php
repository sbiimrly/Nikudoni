<?php

use Illuminate\Support\Facades\Route;

Route::get('/Beranda', function () {
    return view('welcome');
});

Route::get('/Menu', function () {
    return view('menu');
});
