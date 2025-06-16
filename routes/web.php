<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about-us');
});
Route::get('/contact', function () {
    return view('contact-us');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
