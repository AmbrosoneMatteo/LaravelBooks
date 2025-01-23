<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::resource('authors', AuthorController::class);
Route::resource('categories', CategoryController::class);
Route::resource('books', BookController::class);

Route::get("/copertine", );

Route::get('/', [AuthorController::class, 'index'])->name('home');
Route::get('/books/listbycategory/{id}', [BookController::class, 'listByCategory'])->name('books.listByCategory');
