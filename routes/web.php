<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return "This is homepage";
});

Route::view('contact', 'contact-us');
route::get('about', function(){
    $name ="Basheer Haadi";
    $email = "bashjr@gmail.com";
    return view('about-us')->with([
        'name' => $name,
        'email' => $email
    ]);
});

Route::get('/',function(){
    return view('home')->name('Homepage');
});
