<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;

Route::get('/', [MainController::class, 'index']);
Route::get('/gallery/{id}', [MainController::class, 'gallery'])->name('gallery');
Route::view('/about', 'pages.about');
Route::view('/contacts', 'pages.contacts');
Route::get('/signin', [AuthController::class, 'create'])->name('signin.form');
Route::post('/signin', [AuthController::class, 'registration'])->name('signin.submit');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::resource('/articles', ArticleController::class);