<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    protected $message;

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

    public function username()
    {
        return 'username';
    }

    public function index()
    {
        return view('client.login');
    }

    public function login(LoginRequest $request)
    {
        $inputs = $request->all(['username', 'password', 'remember']);
        $user = User::where(['username' => $inputs['username']])->first();
        $rememberMe = $inputs['remember'] ?? false;
        $credentials = ['username' => $inputs['username'], 'password' => $inputs['password']];
        if ($user) {
            $this->guard()->attempt($credentials, $rememberMe);
            if (session('guest_user')) {
                session()->forget('guest_user');

            }
            return redirect()->route('home');
        } else {

            return redirect()->route('indexLogin');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session()->flush();
        return redirect()->route('indexLogin');
    }
}
