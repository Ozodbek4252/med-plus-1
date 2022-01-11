<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
  use AuthenticatesUsers;

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  protected $redirectTo = RouteServiceProvider::HOME;

  // protected function redirectTo()
  // {
  //   if (Auth()->user()->role == 1) {
  //     return route('admin.dashboard');
  //   } elseif (Auth()->user() == 2) {
  //     return route('user.dashboard');
  //   }
  // }

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }



  public function adminLoginIndex()
  {
    return view('auth.adminLogin');
  }

  public function adminLogin(Request $request)
  {
    $input = $request->all();
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
    ]);

    
    if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])) && auth()->user()->role == 1) {
      return redirect()->route('admin.dashboard');
    } else {
      // return redirect()->route('admin.login');
      return view('auth.adminLogin')->with('error', 'Email or password are wrong');
    }
  }
}
