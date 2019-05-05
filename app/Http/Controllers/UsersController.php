<?php

namespace App\Http\Controllers;

use App\User;
use App\Borrowed_Book;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\RegistersUsers;

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
        $users = User::orderBy('created_at','desc')->paginate(3);
        return view('users.index')-> with('users',$users);
        // return $users;
    }

    /**
     * Display a specific user page.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(User $profile)
    {

        // $users = User::orderBy('created_at','desc')->paginate(5);

        // $user = User::find($id);

        return view('users.profile', ['user'=> $profile]);

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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'user_name'=>['required',"unique:users,user_name"],
            'national_id'=>['required',"unique:users,national_id"],
            'phone'=>['required','min:5',"unique:users,phone"],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
         User::create([
            'name' => $request->input('name'),
            'user_name'=>$request->input('user_name'),
            'national_id'=>$request->input('national_id'),
            'phone'=>$request->input('phone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'is_active' => $request->input('is_active')  == 'on' ? true : false,
            'is_admin'=> $request->input('is_admin')   == 'on' ? true : false
        ]);
    // }
        return redirect('users');
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
        $this->validate($request,[
            'user_name'=>['required',"unique:users,user_name,$user->id"],
            'email'=>['required',"unique:users,email,$user->id"],
            'national_id'=>['required',"unique:users,national_id,$user->id"],
            'phone'=>['required','min:5',"unique:users,phone,$user->id"]
            ]);
        $user->update([
            'name' => $request->input('name'),
            'user_name'=>$request->input('user_name'),
            'national_id'=>$request->input('national_id'),
            'phone'=>$request->input('phone'),
            'email' => $request->input('email'),
            'is_active' => $request->input('is_active')  == 'on' ? true : false,
            'is_admin'=> $request->input('is_admin')   == 'on' ? true : false
        ]);
        return redirect('users')->with('success','User Updated');
    }

    public function update_profile(Request $request, User $profile)
    {
        
        $this->validate($request,[
            'user_name'=>['required',"unique:users,user_name,$profile->id"],
            'email'=>['required',"unique:users,email,$profile->id"],
            'national_id'=>['required',"unique:users,national_id,$profile->id"],
            'phone'=>['required','min:5',"unique:users,email,$profile->id"]
            ]);
        $profile->update([
            'name' => $request->input('name'),
            'user_name'=>$request->input('user_name'),
            'national_id'=>$request->input('national_id'),
            'phone'=>$request->input('phone'),
            'email' => $request->input('email'),
        ]);
        return redirect()->route('users.profile',['profile'=>$profile])->with('success','updated');
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
