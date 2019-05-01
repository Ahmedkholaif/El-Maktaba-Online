<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/{id}', 'UsersController@profile');

Route::resource('/users', 'UsersController');//->middleware('admin') ;//->middleware('auth');
Route::resource('/books', 'BooksController');//->middleware('auth');

// Route::resource('books.comments', 'CommentsController')->middleware('auth');


Route::get('/borrowed_books', 'BooksController@borrowedBooks')->name('borrowedBooks');
Route::get('/favorite_books', 'BooksController@favoriteBooks')->name('favoriteBooks');
Route::get('/admin/Borrowed_Books', 'UsersController@adminBorrowedBooks')->name('adminBorrowedBooks');
Route::resource('/books/{id}/comments', 'CommentsController')->middleware('auth');

Route::resource('category','CategoriesController');
// Route::get('/category', 'CategoriesController@index');
// Route::get('/category.store', 'CategoriesController@store');