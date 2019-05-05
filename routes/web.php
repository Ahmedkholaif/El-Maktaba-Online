<?php
use App\Book;
use Illuminate\Support\Facades\Input;
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

Route::get('/home', 'BooksController@userHomeBooks')->name('home');
// Route::post('/home/{searchWord}', 'books@search')->name('books.search');
// Route::get('/home/searchResults', 'books@searchResults');
Route::get('/users/{profile}', 'UsersController@profile')->name('users.profile');
Route::put('/users/{profile}/update','UsersController@update_profile')->name('users.update_profile');

Route::resource('/users', 'UsersController')->except('show');//->middleware('admin') ;//->middleware('auth');
Route::resource('/books', 'BooksController');//->middleware('auth');

// Route::resource('books.comments', 'CommentsController')->middleware('auth');


Route::get('/borrowed_books', 'BooksController@borrowedBooks')->name('borrowedBooks');
Route::get('/favorite_books', 'BooksController@favoriteBooks')->name('favoriteBooks');
Route::get('/admin/Borrowed_Books', 'BooksController@adminBorrowedBooks')->name('adminBorrowedBooks');
Route::resource('/books/{id}/comments', 'CommentsController')->middleware('auth');

Route::resource('category','CategoriesController');

Route::post('/books/{id}', 'BooksController@saveRating')->name('books.saveRating');


Route::any('/search', 'BooksController@search');


Route::post('/favourites/store', 'FavouritesController@store');
Route::post('/favourites/destroy', 'FavouritesController@destroy');


