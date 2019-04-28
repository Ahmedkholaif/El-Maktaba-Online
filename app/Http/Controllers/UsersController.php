<?php

namespace App\Http\Controllers;

use App\User;
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
        return view('users.edit',['user'=>$user]);
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
        print $user ;
        $this->validate($request,[
            'user_name'=>['required',"unique:users,user_name,$user->id"],
            'email'=>['required',"unique:users,email,$user->id"],
            'phone'=>'min:5'
            ]);
        $user->update([
            'name' => $request->input('name'),
            'user_name'=>$request->input('user_name'),
            'national_id'=>$request->input('national_id'),
            'phone'=>$request->input('phone'),
            'email' => $request->input('email'),
        ]);
        return redirect('users')->with('success','User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('users')->with('success','User Deleted');

    }
}
