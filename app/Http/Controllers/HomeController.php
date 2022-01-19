<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Clinic;
use App\Models\ClinicAddress;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function doctors()
    {
        $data = Doctor::all();
        return view('doctors', compact('data'));
    }

    public function clinics()
    {
        $clinics = Clinic::paginate(10);

        return view('dashboards.users.components.clinics', compact("clinics"));
    }
}
