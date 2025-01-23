<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/books', [BookController::class, 'loadAllBooks'])->name('books');
Route::get('/add/book', [BookController::class, 'loadAddBookForm'])->name('add-book');
Route::post('/add/book', [BookController::class, 'AddBook'])->name('AddBook');
Route::get('/edit/book/{id}', [BookController::class, 'editBook'])->name('edit-book');
Route::post('/update/book/{id}', [BookController::class, 'updateBook'])->name('update-book');
Route::delete('/delete/book/{id}', [BookController::class, 'deleteBook'])->name('delete-book');


