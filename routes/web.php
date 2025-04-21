<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('seo-google', function () {
    return view('seo-google');
});
Route::get('youtube-seo', function () {
    return view('youtube-seo');
});
Route::get('1c-server', function () {
    return view('1c-server');
});

