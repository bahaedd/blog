<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

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

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
  
        $credentials = $request->only('email', 'password');
  
        if (Auth::attempt($credentials)) {
  
            return redirect()->intended();
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    protected function _registerOrLoginUser($data){
    $user = User::where('provider_id', $data->id)->first();
      if(!$user){
         $user = new User();
         $user->name = $data->name;
         $user->password = encrypt('123456dummy');
         $user->email = $data->email;
         $user->provider_id = $data->id;
         $user->avatar = $data->avatar;
         $user->save();
      }
    Auth::login($user);
    }

    //Google Login
    public function redirectToGoogle(){
    return Socialite::driver('google')->stateless()->redirect();
    }

    //Google callback  
    public function handleGoogleCallback(){

    $user = Socialite::driver('google')->stateless()->user();

      $this->_registerorLoginUser($user);
      return redirect()->route('home');
    }

    //linkedin Login
    public function redirectToLinkedin(){
    return Socialite::driver('linkedin')->stateless()->redirect();
    }

    //linkedin callback  
    public function handleLinkedinCallback(){

     try {
     
            $user = Socialite::driver('linkedin')->user();
      
            $linkedinUser = User::where('provider_id', $user->id)->first();
      
            if($linkedinUser){
      
                $this->_registerorLoginUser($linkedinUser);
     
                return redirect()->intended();
      
            }else{
                $this->_registerorLoginUser($linkedinUser);
      
                return redirect()->intended();
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    }

    //Github Login
    public function redirectToGithub(){
    return Socialite::driver('github')->stateless()->redirect();
    }

    //github callback  
    public function handleGithubCallback(){

    $user = Socialite::driver('github')->stateless()->user();

      $this->_registerorLoginUser($user);
      return redirect()->route('home');
    }
}
