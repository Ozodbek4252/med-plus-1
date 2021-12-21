<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    
    function index() {
        return view('dashboards.admins.index');
    }
    
    function profile() {
        return view('dashboards.admins.profile');
    }

    function settings() {
        return view('dashboards.admins.settings');
    }

    public function users()
    {        
        // $posts = Post::latest()->with('user', 'likes')->paginate(10);
        // $data = User::latest()->paginate(3);
    	$data = User::all();

        return view("dashboards.admins.userTable", compact("data"));
        // $address = address::all();
    	// $num = 1;

        // $users = DB::table('users')
        //     ->join('addresses', 'users.address', 'addresses.id')
        //     ->select('users.*', 'addresses.*')
        //     ->get();

    	// return view("admin.users", compact("data", "num", "address", "users"));
    }
}
