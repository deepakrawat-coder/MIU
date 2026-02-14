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
Route::view('/equal-opportunity-cell', 'web.pages.equal-opportunity-cell');
Route::view('/research-and-development-cell', 'web.pages.research-and-development-cell');
Route::view('/internal-complaint-committee', 'web.pages.internal-complaint-committee');
Route::view('/scholarship-policy', 'web.pages.scholarship-policy');
Route::view('/refund-policy', 'web.pages.refund-policy');
Route::view('/reservation-roster', 'web.pages.reservation-roster');
Route::view('/ombudsperson', 'web.pages.ombudsperson');
Route::view('/project-development-cell', 'web.pages.project-development-cell');
Route::view('/sedg-cell', 'web.pages.sedg-cell');
Route::view('/verification', 'web.pages.verification');
Route::view('/recruitments', 'web.pages.recruitments');
Route::view('/telephone-directories', 'web.pages.telephone-directories');
Route::view('/iqac', 'web.pages.iqac');
Route::view('/public-self-disclosure', 'web.pages.public-self-disclosure');
Route::view('/exam-results', 'web.pages.exam-results');
Route::view('/gallery', 'web.pages.gallery');
Route::view('/blog', 'web.pages.blog');
Route::view('/blog-details', 'web.pages.blog-details');


// static blogs
Route::view('/why-manipur-international-university-is-emerging-as-a-top-choice-for-higher-education-in-northeast-india', 'web.pages.why-manipur-international-university-is-emerging-as-a-top-choice-for-higher-education-in-northeast-india');
Route::view('/top-career-oriented-programs-at-manipur-international-university-forfuture-ready-students', 'web.pages.top-career-oriented-programs-at-manipur-international-university-forfuture-ready-students');
Route::view('/ugc-recognition-and-nep-aligned-education-at-manipur-international-university-what-students-should-know', 'web.pages.ugc-recognition-and-nep-aligned-education-at-manipur-international-university-what-students-should-know');
Route::view('/campus-life-and-student-development-at-manipur-international-university', 'web.pages.campus-life-and-student-development-at-manipur-international-university');
Route::view('/admission-guide-2026-how-to-apply-to-manipur-international-university', 'web.pages.admission-guide-2026-how-to-apply-to-manipur-international-university');

require __DIR__.'/settings.php';