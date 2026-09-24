<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);
Route::get('/gallery/{id}', [MainController::class, 'gallery'])->name('gallery');
Route::view('/about', 'pages.about');
Route::view('/contacts', 'pages.contacts');