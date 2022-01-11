<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clinic;
use App\Models\ClinicLink;
use App\Models\ClinicWorkDay;
use App\Models\ClinicAddress;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

  function addClinicSave(Request $request, $id)
  {
    $data = User::all();
dd(gettype($request->logo));
    $request->logo->move('admins', "ok.png");

    $clinic = new Clinic;
    $clinicLink = new ClinicLink;
    $clinicWorkDay = new ClinicWorkDay;
    $clinicAddress = new ClinicAddress;

    $clinic->user_id = intval($id);
    $clinic->name = $request->name;
    $clinic->phone = $request->phone;
    // $clinic->logo = $request->logo;
    $clinic->save();

    if ($request->tg != null || $request->fb != null || $request->insta != null || $request->email != null) {
      $clinicLink->clinic_id = $clinic->id;
      $clinicLink->tg = $request->tg;
      $clinicLink->fb = $request->fb;
      $clinicLink->email = $request->email;
      $clinicLink->insta = $request->insta;
      $clinicLink->save();
      $clinic->link = $clinicLink->id;
    }

    if (
      $request->mon != null || $request->tue != null || $request->wed != null ||
      $request->thu != null || $request->fri != null || $request->sat != null ||
      $request->sun != null
    ) {
      $clinicWorkDay->clinic_id = $clinic->id;
      if ($request->mon != null) {
        $clinicWorkDay->mon = $request->monstart . ' - ' . $request->monend;
      }
      if ($request->tue != null) {
        $clinicWorkDay->tue = $request->tuestart . ' - ' . $request->tueend;
      }
      if ($request->wed != null) {
        $clinicWorkDay->wed = $request->wedstart . ' - ' . $request->wedend;
      }
      if ($request->thu != null) {
        $clinicWorkDay->thu = $request->thustart . ' - ' . $request->thuend;
      }
      if ($request->fri != null) {
        $clinicWorkDay->fri = $request->fristart . ' - ' . $request->friend;
      }
      if ($request->sat != null) {
        $clinicWorkDay->sat = $request->satstart . ' - ' . $request->satend;
      }
      if ($request->sun != null) {
        $clinicWorkDay->sun = $request->sunstart . ' - ' . $request->sunend;
      }
      $clinicWorkDay->save();
      $clinic->workday = $clinicWorkDay->id;
    }

    $clinicAddress->clinic_id = $clinic->id;
    if ($request->state != 'Choose...') {
      $clinicAddress->state = $request->state;
    } else {
      $clinicAddress->state = null;
    }
    $clinicAddress->city = $request->city;
    $clinicAddress->street = $request->street;
    $clinicAddress->apartment = $request->apartment;
    $clinicAddress->save();
    $clinic->address = $clinicAddress->id;

      // foreach ($files as $file) {//this statement will loop through all files.
      //     $file_name = $file->getClientOriginalName(); //Get file original name
      //     $file->move('admins' , $file_name); // move files to destination folder
      // }


    $image = $request->myImage;
    $imagename = time() . $image;

    // Storage::disk('public')->put('images', $imagename);


    $request->myImage->move('admins', "ok.png");
    $clinic->myImage = $imagename;


    $clinic->save();

    return redirect()->route('admin.users');
  }

  public function clinics()
  {
    $data = DB::table('clinics')
      ->join('clinic_addresses', 'clinics.address', 'clinic_addresses.id')
      ->join('users', 'clinics.user_id', 'users.id')
      ->join('clinic_work_days', 'clinics.workday', 'clinic_work_days.id')
      ->join('clinic_links', 'clinics.link', 'clinic_links.id')
      ->select('clinics.*', 'clinic_addresses.*', 'users.first_name', 'users.last_name', 'clinic_work_days.*', 'clinic_links.*')
      ->get();

    return view("dashboards.admins.components.clinicTable", compact("data"));
  }

  public function editClinic(Request $request, $id)
  {
    $data = Clinic::find($id);
    $address = ClinicAddress::find($data->address);
    $link = ClinicLink::find($data->link);
    $workday = ClinicWorkDay::find($data->workday);


    return view('dashboards.admins.components.editClinic', compact("data", "address", "link", "workday"));
  }
}
