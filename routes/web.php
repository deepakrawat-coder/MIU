<?php

use Illuminate\Support\Facades\Route;

Route::get('/homw', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('/', 'web.pages.index');
Route::view('/about-us', 'web.pages.about-us');
Route::view('/departments', 'web.pages.departments');
Route::view('/programs', 'web.pages.deparments-programs');
Route::view('/programs-details', 'web.pages.programs-details');
Route::view('/specialization-details', 'web.pages.specialization-details');


require __DIR__.'/settings.php';