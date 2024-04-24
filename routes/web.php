<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;

// Rotta per la homepage
// Route::get('/', [PublicController::class, 'home'])-> name('home');

// Rotta per la pagina della storia
Route::get('/history', [PublicController::class, 'history'])-> name('storia');

// Rotta per la pagina del contattaci
Route::get('/contacts', [ContactController::class, 'contacts'])-> name('contatti');
Route::post('/contacts/submit', [ContactController::class, 'submit'])-> name('submit');

// Rotta per la newsletter
Route::post('/', [NewsletterController::class, 'submit'])-> name('newsletter');

// Rotta per la recensione
Route::get('/', [ReviewController::class, 'index'])-> name('review.index');
Route::get('/review/create', [ReviewController::class, 'create'])-> name('review.create');
Route::post('review/store', [ReviewController::class, 'store'])->name('review.store');

// Rotta per gli articoli
Route::get('/articles', [ArticleController::class, 'articles'])-> name('articoli');
