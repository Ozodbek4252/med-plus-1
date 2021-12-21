<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
