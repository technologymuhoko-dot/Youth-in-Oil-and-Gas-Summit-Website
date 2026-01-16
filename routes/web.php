<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('home', fn() => view('pages.home'));
Route::get('contact', fn() => view('pages.contact'));
Route::get('services', fn() => view('pages.services'));