<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;

Route::get('/', [PublicController::class, 'home'])-> name('home');
Route::get('/history', [PublicController::class, 'history'])-> name('storia');

Route::get('/contacts', [ContactController::class, 'contacts'])-> name('contatti');
Route::post('/contacts/submit', [ContactController::class, 'submit'])-> name('submit');

Route::post('/', [NewsletterController::class, 'store'])-> name('welcome.store');

Route::get('/articles', [ArticleController::class, 'articles'])-> name('articoli');