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
        $week1=0;
        $week2=0;
        $week3=0;
        $week4=0;
        foreach($booksInfo as $book)
        {
            if( date("m",strtotime($book->created_at)) == date('m')
                && date("d",strtotime($book->created_at)) > 0
                && date("d",strtotime($book->created_at)) <= 8  )
            {
                $fees = $book->fees_per_day * $book->number_of_days;
                $week1+=$fees;
            }
            elseif(date("m",strtotime($book->created_at)) == date('m')
                && date("d",strtotime($book->created_at)) > 8
                && date("d",strtotime($book->created_at)) <= 15  )
            {
                $fees = $book->fees_per_day * $book->number_of_days;
                $week2+=$fees;
            }
            elseif(date("m",strtotime($book->created_at)) == date('m')
            && date("d",strtotime($book->created_at)) > 15
            && date("d",strtotime($book->created_at)) <= 22  )
            {
                $fees = $book->fees_per_day * $book->number_of_days;
                $week3+=$fees;
            }
            elseif(date("m",strtotime($book->created_at)) == date('m')
            && date("d",strtotime($book->created_at)) > 22)
            {
                $fees = $book->fees_per_day * $book->number_of_days ;
                $week4+=$fees;
            }
        }
        return view('admin_borrowed_books',compact('booksInfo','week1','week2','week3','week4'));
    }
}
