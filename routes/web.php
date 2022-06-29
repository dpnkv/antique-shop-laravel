<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'welcome']);

Route::get('/books', [MainController::class, 'books']);

Route::get('/not_books', [MainController::class, 'not_books']);

Route::get('/books/book1', [MainController::class, 'book1']);
Route::get('/books/book2', [MainController::class, 'book2']);
Route::get('/books/book3', [MainController::class, 'book3']);
Route::get('/books/book4', [MainController::class, 'book4']);
Route::get('/books/book5', [MainController::class, 'book5']);
Route::get('/books/book6', [MainController::class, 'book6']);
Route::get('/books/book7', [MainController::class, 'book7']);
Route::get('/books/book8', [MainController::class, 'book8']);
Route::get('/books/book9', [MainController::class, 'book9']);
Route::get('/books/book10', [MainController::class, 'book10']);

Route::get('/not_books/not_book1', [MainController::class, 'not_book1']);
Route::get('/not_books/not_book2', [MainController::class, 'not_book2']);