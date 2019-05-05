<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Book;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($bookid)
    {   $book = Book::find($bookid);
        $comments = $book->comments()->orderByDesc('created_at')->get() ; 
        return view('comments.index' , compact('book','comments'));
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
    public function store(Request $request, $bookid)
    {    $request->validate([
        'body'=> 'required',
         ]);
        $comment = new Comment([
          'body' => request("body"),
          'book_id' => $bookid ,
          'user_id' => auth()->id()

        ]);
        $comment->save();
        return redirect()->route('books.show', ['bookid'=> $bookid]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id , $comment)
    {
        $comment = Comment::find($comment);
        $comment->delete();
        
        return redirect()->back(); 
    }
}
