<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
// use AuthenticatesUsers;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected function authenticated(Request $request, $user) {
        // dd($user);
        // dd($user->is_admin);
        if ($user->is_admin == 1) {
            // to admin dashboard
            return redirect('/users');
        }
        // to user profile
        return redirect('/home');
   }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username() {
        $login = request()->input('login');
        $field = filter_var($login,FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';
        request()->merge([$field=>$login]);
        return $field;
    }

    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        $credentials['is_active'] = 1;

        return $credentials;
    }
}
