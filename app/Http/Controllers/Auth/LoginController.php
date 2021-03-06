<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  // use AuthenticatesUsers;


  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  protected $redirectTo = RouteServiceProvider::HOME;

  protected function redirectTo()
  {
    if (Auth()->user()->role == 1) {
      return route('admin.dashboard');
    } elseif (Auth()->user() == 2) {
      return route('user.dashboard');
    }
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

  public function showLoginForm()
  {
    return view('auth.login');
  }

  public function logout()
  {

    Session::flush();

    Auth::logout();

    return redirect()->route('home');
  }

  public function login(Request $request)
  {
    $input = $request->all();
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))  && auth()->user()->role == 2) {
      if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))  && auth()->user()->role == 2) {
        return redirect()->route('user.dashboard');
      }
    } else {
      return redirect()->route('login')->with('error', 'Email or password are wrong');
    }
  }
}
