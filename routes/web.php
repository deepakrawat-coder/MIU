<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsCategoryController;



Route::get('/homw', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('/', 'web.pages.index');
Route::view('/about-us', 'web.pages.about-us');
Route::view('/departments', 'web.pages.departments');
Route::view('/schools-and-departments', 'web.pages.deparments-programs');
Route::view('/programs-details', 'web.pages.programs-details');
Route::view('/specialization-details', 'web.pages.specialization-details');
Route::view('/contact-us', 'web.pages.contact-us');
Route::view('/chancellor', 'web.pages.chancellor');
Route::view('/vice-chancellor', 'web.pages.vice-chancellor');
Route::view('/pro-vice-chancellor', 'web.pages.pro-vice-chancellor');
Route::view('/registrar', 'web.pages.registrar');
Route::view('/director', 'web.pages.director');
Route::view('/academic-leadership-team', 'web.pages.academic-leadership-team');
Route::view('/incubation-center', 'web.pages.incubation-center');
Route::view('/academics-team', 'web.pages.academics-team');
Route::view('/coe', 'web.pages.coe');
Route::view('/notice-and-events', 'web.pages.notice-and-events');
Route::view('/anti-ragging', 'web.pages.anti-ragging');
Route::view('/school-details', 'web.pages.school-details');
Route::view('/notice-and-events-details', 'web.pages.notice-and-events-details');
Route::view('/academic-collaborations', 'web.pages.academic-collaborations');
Route::view('/alumni', 'web.pages.alumni');
Route::view('/awards', 'web.pages.awards');
Route::view('/cpio', 'web.pages.cpio');
Route::view('/grievance-cell', 'web.pages.grievance-cell');
Route::view('/academic-council', 'web.pages.academic-council');
Route::view('/constituent-colleges', 'web.pages.constituent-colleges');
Route::view('/health-facilities', 'web.pages.health-facilities');
Route::view('/syllabus-courses', 'web.pages.syllabus-courses');



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






Route::prefix('events')->group(function () {

    Route::get('/', [EventsCategoryController::class, 'index'])
        ->name('events.index');

    Route::get('/create', [EventsCategoryController::class, 'create'])
        ->name('events.create');

    Route::post('/store', [EventsCategoryController::class, 'store'])
        ->name('events.store');

    Route::get('/edit/{id}', [EventsCategoryController::class, 'edit'])
        ->name('events.edit');

    Route::post('/update/{id}', [EventsCategoryController::class, 'update'])
        ->name('events.update');

    Route::delete('/delete/{id}', [EventsCategoryController::class, 'destroy'])
        ->name('events.delete');

    Route::get('/status/{id}', [EventsCategoryController::class, 'status'])
        ->name('events.status');
});





Route::get('/test', function () {
    return 'Laravel is working';
});

require __DIR__ . '/settings.php';
