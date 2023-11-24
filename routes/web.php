<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SpecifiedSkilledWorkerController;
use App\Http\Controllers\TechnicalInternController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitieController::class);
Route::resource('job', JobController::class);
Route::resource('cv', CvController::class);
Route::resource('employer', EmployerController::class);

Route::resource('about', AboutController::class);
Route::get('/ceo_message', [AboutController::class, 'ceo_message'])->name('ceo_message');
Route::get('/team', [AboutController::class, 'team'])->name('team');
Route::get('/statement', [AboutController::class, 'statement'])->name('statement');



Route::resource('specified_skilled', SpecifiedSkilledWorkerController::class);
Route::resource('technical_intern', TechnicalInternController::class);

Route::resource('school', SchoolController::class);
Route::resource('news', NewsController::class);


Route::get('/en', [LanguageController::class, 'en'])->name('en');
Route::get('/jp', [LanguageController::class, 'jp'])->name('jp');
