<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/contacts', function () {
    return view('pages.contacts');
});

Route::get('/about', function () {
    return view('pages.about');
});