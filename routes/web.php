<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage-2');
})->name('home');

Route::get('/tentang', function () {
    return view('about-us');
})->name('tentang');

Route::get('/pendaftaran', function () {
    return view('ppdb');
})->name('pendaftaran');

Route::get('/hubungi-kami', function () {
    return view('contact');
})->name('hubungikami');
