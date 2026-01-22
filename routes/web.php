<?php

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('home', fn() => view('pages.home'));
Route::get('contact', fn() => view('pages.contact'));
Route::get('services', fn() => view('pages.services'));

// Route::get('register', fn() => view('registration.register'));

Route::resource('attendee', AttendeeController::class)->except('create');
Route::get('attendee/register/{attendee}', [AttendeeController::class, 'create'])->name('attendee.create');

Route::get('payment/{attendee}', [PaymentController::class, 'create'])->name('payment.create');
Route::resource('payment', PaymentController::class)->except('create');


Route::resource('register', RegisterController::class);

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RecapController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);
Route::get('/about/why-walvis-bay', [AboutController::class, 'whyWalvisBay']);
Route::get('/about/why-now', [AboutController::class, 'whyNow']);
Route::get('/about/welcome', [AboutController::class, 'welcome']);
Route::get('/about/advisory-board', [AboutController::class, 'advisoryBoard']);

Route::get('/programme', [ProgrammeController::class, 'index']);
Route::get('/programme/schedule', [ProgrammeController::class, 'schedule']);
Route::get('/programme/call-for-papers', [ProgrammeController::class, 'callForPapers']);

Route::get('/sponsor', [SponsorController::class, 'index']);
Route::get('/partners', [PartnersController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/recap', [RecapController::class, 'index']);
Route::get('/recap/gallery', [RecapController::class, 'gallery']);
Route::get('/recap/report', [RecapController::class, 'report']);
Route::get('/recap/info', [RecapController::class, 'info']);