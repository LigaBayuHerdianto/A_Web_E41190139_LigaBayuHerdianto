<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $_request){
        $this->validate($_request, [
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        $loginType = filter_var($_request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $login = [
            $loginType => $_request->username,
            'password' => $_request->password
        ];
        if (auth()->attemp($login)){
            return redirect()->route('home');
        }
            return redirect()->route('login')->with(['error' => 'Email/Password salah !']);
    }
}
