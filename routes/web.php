<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/book', function () {
    return view('pages.plp');
})->name('plp');

Route::get('/book/{id}', function () {
    return view('pages.pdp');
})->name('pdp');


Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');


