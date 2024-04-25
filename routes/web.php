<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cover');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('/carousel', function () {
    return view('carousel');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});