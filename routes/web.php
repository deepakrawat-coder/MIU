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
Route::view('/contact-us', 'web.pages.contact-us');
Route::view('/chancellor', 'web.pages.chancellor');
Route::view('/vice-chancellor', 'web.pages.vice-chancellor');
Route::view('/pro-vice-chancellor', 'web.pages.pro-vice-chancellor');
Route::view('/registrar', 'web.pages.registrar');
Route::view('/director', 'web.pages.director');
Route::view('/academic-leadership-team', 'web.pages.academic-leadership-team');
Route::view('/academics-team', 'web.pages.academics-team');
Route::view('/coe', 'web.pages.coe');
Route::view('/notice-and-events', 'web.pages.notice-and-events');
Route::view('/notice-and-events-details', 'web.pages.notice-and-events-details');


require __DIR__.'/settings.php';