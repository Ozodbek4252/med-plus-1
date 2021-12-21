<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    function index() {
        return view('dashboards.users.index');
    }

    function profile() {
        return view('dashboards.users.profile');
    }

    function completeacccount() {
        $data = Auth::user();
        return view('dashboards.users.components.completeacccount', compact("data"));
    }

    function completeacccountSave(Request $request, $id) {
        $user = User::find($id);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;

        if(!$request->phone == null) {
            $user->phone = $request->phone;
        }
        if(!$request->gender == null) {
            $user->gender = $request->gender;
        }
        if(!$request->date_of_birth == null) {
            $user->date_of_birth = $request->date_of_birth;
        }

        $user->save();

        return view('dashboards.users.profile');
    }
    
    function fetchData()
    {
        $data = Auth::user();
        return response()->json(['data'=>$data]);
    }
}
