<?php

namespace App\Http\Controllers;

use App\User;
use App\Borrowed_Book;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = auth()->user();
        // $contacts = Contact::orderBy('created_at','desc')->paginate(3);
        $users = User::orderBy('created_at','desc')->paginate(5);
        return view('users.index')-> with('users',$users);
        // return $users;
    }

    /**
     * Display a specific user page.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        
        // $users = User::orderBy('created_at','desc')->paginate(5);
        
        $users = User::find($id);
        
        return view('users.profile', compact(['users']));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    public function adminBorrowedBooks()
    {
        $booksInfo = Borrowed_Book::get();
        return view('admin_borrowed_books',compact('booksInfo'));
    }
}
