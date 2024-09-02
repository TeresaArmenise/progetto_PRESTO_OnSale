<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/create/Article', [ArticleController::class, 'create'])->name('create');
Route::get('/article/index', [ArticleController::class, 'index'])->name('index');
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('show');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');
Route::get('/workwithus/revisor', [RevisorController::class, 'WorkWithUs'])->middleware('auth')->name('workwithus');
Route::post('/workwithus/submit', [RevisorController::class, 'becomeRevisor'])->name('submit');

Route::get('/Search/Article', [PublicController::class, 'search'])->name('search');
Route::patch('/undo/{article}', [RevisorController::class, 'undo'])->name('undo');

Route::get('/I-miei-articoli', [ArticleController::class, 'myArticles'])->name('myArticles');

Route::get('/Profile', [PublicController::class, 'profile'])->middleware('auth')->name('profile');

Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');

Route::get('/admin-Area', [PublicController::class, 'adminArea'])->middleware('auth')->name('adminArea');