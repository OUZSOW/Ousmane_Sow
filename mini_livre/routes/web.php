<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ReviewController;


Route::get('/' , [ReviewController::class, 'index']);


Route::get('/books', [BooksController::class, 'index']);


Route::get('/books/{book}', [BooksController::class, 'show']);


Route::post('/books/{book}/reviews', [ReviewController::class, 'store'])->name('books.show');

