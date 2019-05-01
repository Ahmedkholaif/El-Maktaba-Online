<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Book_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
        $books = Book::all();
        $categories = Category::all();
        return view('home', compact('books','categories'));

    }
}
