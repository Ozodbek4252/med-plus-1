<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Clinic;
use App\Models\Doctor;

use App\Models\ClinicCategory;
use App\Models\Address;
use App\Models\Link;
use App\Models\WorkingDay;
use App\Models\ClinicType;
use App\Models\Speciality;
use App\Models\State;
use App\Models\City;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function logout()
  {
    dd(Auth::user());
    Session::flush();
    Auth::logout();

    return view('home');
  }

  function index()
  {
    return view('dashboards.admins.index');
  }

  public function users()
  {
    // $posts = Post::latest()->with('user', 'likes')->paginate(10);
    // $data = User::latest()->paginate(3);
    $data = User::all();

    return view("dashboards.admins.components.userTable", compact("data"));
  }

  public function clinics()
  {
    $clinics = Clinic::all();

    return view(
      "dashboards.admins.components.clinicTable",
      compact("clinics")
    );
  }

  function addClinic()
  {
    $clinic = Clinic::all();
    $owner = User::all();
    $clinicCategory = ClinicCategory::all();
    $clinicType = ClinicType::all();
    $doctors = Doctor::all();
    $states = State::all();

    return view(
      'dashboards.admins.components.addClinic',
      compact('owner', 'clinicCategory', 'clinicType', 'doctors', 'states')
    );
  }

  function addClinicSave(Request $request)
  {
    $clinic = new Clinic;
    if ($request->get('name')) {
      $clinic->name = $request->name;
    }
    if ($request->get('phone')) {
      $clinic->phone = $request->phone;
    }
    // location and image are required
    if ($request->get('phone')) {
      $clinic->info_ru = $request->info_ru;
    }
    if ($request->get('phone')) {
      $clinic->info_uz = $request->info_uz;
    }
    if ($request->get('phone')) {
      $clinic->type = $request->type;
    }
    if ($request->get('phone')) {
      $clinic->user_id = $request->owner;
    }
    // $clinic->category = $request->category;
    $clinic->save();

    if ($request->doctors) {
      $doctorsids = $request->doctors;
      $clinic->doctors()->attach($doctorsids);
    }

    if ($request->tg != null || $request->fb != null || $request->insta != null || $request->email != null) {
      $link = new Link;
      $link->clinic_id = $clinic->id;
      $link->tg = $request->tg;
      $link->fb = $request->fb;
      $link->email = $request->email;
      $link->insta = $request->insta;
      $link->save();
    }
    if (
      $request->mon != null || $request->tue != null || $request->wed != null ||
      $request->thu != null || $request->fri != null || $request->sat != null ||
      $request->sun != null
    ) {
      $workingDay = new WorkingDay;
      $workingDay->clinic_id = $clinic->id;
      if ($request->mon != null) {
        $workingDay->mon = $request->monstart . ' - ' . $request->monend;
      }
      if ($request->tue != null) {
        $workingDay->tue = $request->tuestart . ' - ' . $request->tueend;
      }
      if ($request->wed != null) {
        $workingDay->wed = $request->wedstart . ' - ' . $request->wedend;
      }
      if ($request->thu != null) {
        $workingDay->thu = $request->thustart . ' - ' . $request->thuend;
      }
      if ($request->fri != null) {
        $workingDay->fri = $request->fristart . ' - ' . $request->friend;
      }
      if ($request->sat != null) {
        $workingDay->sat = $request->satstart . ' - ' . $request->satend;
      }
      if ($request->sun != null) {
        $workingDay->sun = $request->sunstart . ' - ' . $request->sunend;
      }
      $workingDay->save();
    }

    $address = new Address;
    $address->clinic_id = $clinic->id;
    if ($request->state_ru != 'Choose...' || $request->state_ru != null) {
      $address->state = intval($request->state_ru);
    } else {
      $address->state = null;
    }
    $address->city = $request->city_ru;

    if ($request->get('street_ru')) {
      $address->street_ru = $request->street_ru;
    }
    if ($request->get('street_uz')) {
      $address->street_uz = $request->street_uz;
    }
    if ($request->get('apartment_ru')) {
      $address->apartment_ru = $request->apartment_ru;
    }
    if ($request->get('apartment_uz')) {
      $address->apartment_uz = $request->apartment_uz;
    }
    if ($request->get('moljal_ru')) {
      $address->moljal_ru = $request->moljal_ru;
    }
    if ($request->get('moljal_uz')) {
      $address->moljal_uz = $request->moljal_uz;
    }
    $address->save();
    $clinicAddress = Address::find($clinic->addressed);

    // logo, map, gallery
    // foreach ($files as $file) {//this statement will loop through all files.
    //     $file_name = $file->getClientOriginalName(); //Get file original name
    //     $file->move('admins' , $file_name); // move files to destination folder
    // }

    // $image = $request->myImage;
    // $imagename = time() . $image;


    // $request->myImage->move('admins', "ok.png");
    // $clinic->myImage = $imagename;


    // $clinic->save();

    return redirect()->route('admin.clinics');
  }

  public function editClinic(Request $request, $id)
  {
    $data = Clinic::find($id);
    $address = ClinicAddress::find($data->address);
    $link = ClinicLink::find($data->link);
    $workday = ClinicWorkDay::find($data->workday);


    return view('dashboards.admins.components.editClinic', compact("data", "address", "link", "workday"));
  }


  // Doctors
  public function doctors()
  {
    $data = Doctor::all();
    $num = 1;

    return view('dashboards.admins.components.doctorsTable', compact("data", "num"));
  }

  public function addDoctor()
  {
    $clinic = Clinic::all();
    $specialities = Speciality::all();
    return view('dashboards.admins.components.addDoctor', compact("clinic", "specialities"));
  }

  public function addDoctorSave(Request $req)
  {
    $doctor = new Doctor;
    $doctor->first_name_ru = $req->get('first_name_ru');
    if ($req->get('first_name_uz')) {
      $doctor->first_name_uz = $req->get('first_name_uz');
    }
    $doctor->last_name_ru = $req->get('last_name_ru');
    if ($req->get('last_name_uz')) {
      $doctor->last_name_uz = $req->get('last_name_uz');
    }
    if ($req->get('summary_ru')) {
      $doctor->summary_ru = $req->get('summary_ru');
    }
    if ($req->get('summary_uz')) {
      $doctor->summary_uz = $req->get('summary_uz');
    }
    if ($req->get('email')) {
      $doctor->email = $req->get('email');
    }
    if ($req->get('phone')) {
      $doctor->phone = $req->get('phone');
    }
    if ($req->get('date_of_birth')) {
      $doctor->date_of_birth = $req->get('date_of_birth');
    }
    if ($req->get('experience')) {
      $doctor->experience = $req->get('experience');
    }
    $doctor->save();

    $specialityids = $req->speciality;
    $doctor->specialities()->attach($specialityids);

    if ($req->clinics) {
      $clinics = $req->clinics;
      $doctor->clinics()->attach($clinics);
    }

    // image

    $doctor->save();
    if (
      $req->mon != null || $req->tue != null || $req->wed != null ||
      $req->thu != null || $req->fri != null || $req->sat != null ||
      $req->sun != null
    ) {
      $workingDay = new WorkingDay;
      $workingDay->doctor_id = $doctor->id;
      if ($req->mon != null) {
        $workingDay->mon = $req->monstart . ' - ' . $req->monend;
      }
      if ($req->tue != null) {
        $workingDay->tue = $req->tuestart . ' - ' . $req->tueend;
      }
      if ($req->wed != null) {
        $workingDay->wed = $req->wedstart . ' - ' . $req->wedend;
      }
      if ($req->thu != null) {
        $workingDay->thu = $req->thustart . ' - ' . $req->thuend;
      }
      if ($req->fri != null) {
        $workingDay->fri = $req->fristart . ' - ' . $req->friend;
      }
      if ($req->sat != null) {
        $workingDay->sat = $req->satstart . ' - ' . $req->satend;
      }
      if ($req->sun != null) {
        $workingDay->sun = $req->sunstart . ' - ' . $req->sunend;
      }
      $workingDay->save();
    }
    $doctor->save();

    return redirect()->route('admin.doctors');
  }

  public function editDoctor(Request $request, $id)
  {
    $data = doctor::find($id);

    return view('dashboards.admins.components.editDoctor', compact("data"));
  }








  public function tab()
  {
    $doctor = Doctor::find(1);

    // $specialityids = [1, 3, 6, 9];
    // $doctor->specialities()->attach($specialityids);

    // dd($doctor->workingDay);
    return view('dashboards.admins.components.tab');
  }
}
