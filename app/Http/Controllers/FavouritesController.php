<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Book;
use App\Favourite_Book;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class FavouritesController extends Controller
{   use SoftDeletes;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($bookid)
    {  
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
        $favourite = new Favourite_Book;
        $favourite->book_id = $request->bookid;
        $favourite->user_id= auth()->user()->id;
        $favourite->save();
        
        return response()->json(['success'=>'Data is succefully added']);

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

  
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request )
    {
        $favourite = Favourite_Book::where('user_id',auth()->user()->id)->where('book_id',$request->bookid);
        $favourite->delete();
        return response()->json(['success'=>'Data is succefully deleted']);

    }
}
