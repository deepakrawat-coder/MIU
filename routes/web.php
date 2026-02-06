<?php

use Illuminate\Support\Facades\Route;

Route::get('/homw', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('/', 'web.pages.index');


require __DIR__.'/settings.php';
