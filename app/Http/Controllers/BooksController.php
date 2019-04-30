<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use App\Category;

use Illuminate\Http\Request;
use App\Borrowed_Book;
use App\Favourite_Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        $categories = Category::all();
        return view('books.index', compact('books','categories'));
        // dd($categories);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $path = $request->image->store('');
        // dd($path);
        // dd($request->categories_id);
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->image = $request->file('image')->store('bookImages','public');
        $book->description = $request->description;
        $book->copies_number = $request->copies_number;
        $book->fees_per_day = $request->fees_per_day;
        $book->save();
        $book->categories()->attach($request->categories_id);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show( $bookid )
    {   
        
        $book = Book::find($bookid);
        $comments = $book->comments()->take(5)->get();
        $relatedBooks=Book::find($bookid)->categories()->first()->books()
        ->where ('book_id', '!=',$bookid)->take(5)->get();     

        // $rating = $book->ratings()->where('user_id', auth()->user()->id)->first();

        return view('books.show',compact('book','comments', 'relatedBooks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $book = Book::find($id);
        $categories = Category::all();
        dd($categories);
        return view('books.edit', compact('book','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->copies_number = $request->copies_number;
        $book->image = $request->file('image')->store('bookImages','public');
        $book->fees_per_day = $request->fees_per_day;
        $book->categories()->detach();
        $book->categories()->attach($request->categories_id);
        $book->save();
        return redirect()->route('books.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Book::find($id)->delete();
        return redirect()->route('books.index');
    }


    public function borrowedBooks()
    {
        $booksInfo = Borrowed_Book::get();
        return view('user_borrowed_books',compact('booksInfo'));
    }

    public function favoriteBooks()
    {
        $booksInfo = Favourite_Book::get();
        return view('user_favorite_books',compact('booksInfo','bool'));
    }
}
