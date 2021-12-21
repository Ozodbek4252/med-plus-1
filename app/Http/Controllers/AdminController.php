<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clinic;
use App\Models\ClinicLink;
use App\Models\ClinicWorkDay;
use App\Models\ClinicAddress;

class AdminController extends Controller
{

  function index()
  {
    return view('dashboards.admins.index');
  }

  // function profile() {
  //     return view('dashboards.admins.profile');
  // }

  public function users()
  {
    // $posts = Post::latest()->with('user', 'likes')->paginate(10);
    // $data = User::latest()->paginate(3);
    $data = User::all();

    return view("dashboards.admins.components.userTable", compact("data"));
    // $address = address::all();
    // $num = 1;

    // $users = DB::table('users')
    //     ->join('addresses', 'users.address', 'addresses.id')
    //     ->select('users.*', 'addresses.*')
    //     ->get();

    // return view("admin.users", compact("data", "num", "address", "users"));
  }

  function addClinic($id)
  {
    $data = User::find($id);
    return view('dashboards.admins.components.addClinic', compact("data"));
  }

  function addClinicSave(Request $request, $id) {
    $clinic = new Clinic;
    $clinicLink = new ClinicLink;
    $clinicWorkDay = new ClinicWorkDay;
    $clinicAddress = new ClinicAddress;

    $clinic->user_id = intval($id);
    $clinic->name = $request->name;
    $clinic->phone = $request->phone;
    $clinic->logo = $request->logo;
    $clinic->save();

    $clinicLink->clinic_id = $clinic->id;
    $clinicLink->tg = $request->tg;
    $clinicLink->fb = $request->fb;
    $clinicLink->email = $request->email;
    $clinicLink->insta = $request->insta;
    $clinicLink->save();

    $clinicWorkDay->clinic_id = $clinic->id;
    $clinicWorkDay->mon = $request->monstart.' - '.$request->monend;
    $clinicWorkDay->tue = $request->tuestart.' - '.$request->tueend;
    $clinicWorkDay->wed = $request->wedstart.' - '.$request->wedend;
    $clinicWorkDay->thu = $request->thustart.' - '.$request->thuend;
    $clinicWorkDay->fri = $request->fristart.' - '.$request->friend;
    $clinicWorkDay->sat = $request->satstart.' - '.$request->satend;
    $clinicWorkDay->sun = $request->sunstart.' - '.$request->sunend;
    $clinicWorkDay->save();

    $clinicAddress->clinic_id = $clinic->id();
    $clinicAddress->state = $request->state;
    $clinicAddress->city = $request->city;
    $clinicAddress->street = $request->street;
    $clinicAddress->apartment = $request->apartment;
    $clinicAddress->save();


  }
}
