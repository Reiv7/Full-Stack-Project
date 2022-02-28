<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function authenticated()
    {
        if(Auth::user()->role_as == '1') //1 = Admin Login
        {
            return redirect('dashboard')->with('status','Welcome to your dashboard ♥');
        }
        elseif(Auth::user()->role_as == '2') // Moderator  Login
        {
            return redirect('dashboard')->with('status','Welcome mod to your dashboard ♥');
        }
        elseif(Auth::user()->role_as == '0') // Normal or Default User Login
        {
            return redirect('/')->with('status','Logged in successfully');
        }
    }


    //Google login & Callback
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();


    }

    public function handleGoogleCallback(){

        $user = Socialite::driver('google')->stateless()->user();

        $this->_registerOrLoginUser($user);
        //return to home page after login success
        return redirect('/')->with('status','Logged in successfully');

    }

    //Facebook login & Callback
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();

    }

    public function handleFacebookCallback(){

        $user = Socialite::driver('facebook')->user();

        $this->_registerOrLoginUser($user);
        //return to home page after login success
        return redirect()->route('welcome');

    }

    //Github login & Callback
    public function redirectToGithub(){
        return Socialite::driver('github')->redirect();

    }

    public function handleGithubCallback(){

        $user = Socialite::driver('github')->stateless()->user();


        $this->_registerOrLoginUser($user);
        //return to home page after login success
        return redirect('/')->with('status','Logged in successfully');

    }

    protected function _registerOrLoginUser($data){
        $user = User::where('email','=',$data->email)->first();
        if (!$user){
            $user = new User();
            $user->name =$data->name;
            $user->email =$data->email;
            $user->provider_id =$data->id;
            $user->save();

        }

        Auth::login($user);
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
}
