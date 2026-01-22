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