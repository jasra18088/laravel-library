<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('books', 'BooksController@index');
Route::post('/books', 'BooksController@store');
Route::get('books/create', 'BooksController@create');
Route::get('books/{book}', 'BooksController@show');
Route::get('books/{book}/edit', 'BooksController@edit');
Route::put('books/{book}', 'BooksController@update');

Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');

Route::get('authors', 'AuthorsController@index');
Route::get('authors/{author}', 'AuthorsController@show');