<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name("homepage");

Route::get('/news', function () {
    return view('news');
})->name("news");
