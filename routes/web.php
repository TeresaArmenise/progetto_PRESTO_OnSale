<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/create/Article', [ArticleController::class, 'create'])->name('create');
Route::get('/article/index', [ArticleController::class, 'index'])->name('index');
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('show');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

