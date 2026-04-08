<?php

use Illuminate\Support\Facades\Route;

// Landing page — pública para todos
Route::get('/', function () {
    return view('landingpage');
});

// Dashboard — solo usuarios autenticados
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Rutas de autenticación generadas por laravel/ui
Auth::routes();