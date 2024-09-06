<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/create/Article', [ArticleController::class, 'create'])->name('create');
Route::get('/article/index', [ArticleController::class, 'index'])->name('index');
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('show');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');
Route::get('/workwithus/revisor', [RevisorController::class, 'WorkWithUs'])->middleware('auth')->name('workwithus');


Route::get('/Search/Article', [PublicController::class, 'search'])->name('search');
Route::patch('/undo/{article}', [RevisorController::class, 'undo'])->name('undo');

Route::get('/I-miei-articoli', [ArticleController::class, 'myArticles'])->name('myArticles');

Route::get('/Profile', [PublicController::class, 'profile'])->middleware('auth')->name('profile');

Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');

Route::get('/admin-Area', [PublicController::class, 'adminArea'])->middleware(['auth', AdminMiddleware::class])->name('adminArea');


Route::post('/workwithus/submit', [RevisorController::class, 'AskTobecomeRevisor'])->name('submit');
Route::post('/Admin_Area/approve/{email}', [PublicController::class, 'approveRevisor'])->name('approveRevisor');

Route::patch('/Admin_Area/declassa/{revisor}', [PublicController::class, 'downgrade'])->name('downgrade');

Route::delete('/I-miei-articoli/delete/{article}', [ArticleController::class, 'destroy'])->name('delete');
Route::delete('/Profile/delete', [PublicController::class, 'destroyProfile'])->name('usersDestroy');


