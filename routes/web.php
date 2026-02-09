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
Route::view('/contact-us', 'web.pages.contact-us');
Route::view('/chancellor', 'web.pages.chancellor');
Route::view('/vice-chancellor', 'web.pages.vice-chancellor');
Route::view('/pro-vice-chancellor', 'web.pages.pro-vice-chancellor');
Route::view('/registrar', 'web.pages.registrar');
Route::view('/director', 'web.pages.director');
Route::view('/academic-leadership-team', 'web.pages.academic-leadership-team');
Route::view('/coe', 'web.pages.coe');



// Route::get('/cms', function () {
//     return view('admin.index');
// });


Route::middleware('guest')->get('/cms', function () {
    return view('admin.index');
})->name('admin.login');

/*
|--------------------------------------------------------------------------
| Authenticated Dashboard
|--------------------------------------------------------------------------
*/

// Route::view('/dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::get('/dashboard', function () {
    return view('admin.home');
})
->middleware(['auth', 'verified'])
->name('dashboard');





Route::get('/test', function () {
    return 'Laravel is working';
});

require __DIR__.'/settings.php';
