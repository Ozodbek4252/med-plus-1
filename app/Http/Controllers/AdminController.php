<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\ClinicLink;
use App\Models\ClinicWorkDay;
use App\Models\ClinicAddress;
use App\Models\Speciality;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

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

  public function logout()
  {
    dd(Auth::user());
    Session::flush();

    Auth::logout();

    return view('home');
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

  public function doctors()
  {
    $data = Doctor::all();
    $doctor = DB::table('doctors')
      ->join('clinic_work_days', 'doctors.workDays', 'clinic_work_days.id')
      ->select('doctors.*', 'clinic_work_days.*')
      ->get();
    return view('dashboards.admins.components.doctorsTable', compact("data"));
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
    $doctor->first_name = $req->get('first_name');
    $doctor->last_name = $req->get('last_name');
    if ($req->get('email')) {
      $doctor->email = $req->get('email');
    }
    if ($req->get('phone')) {
      $doctor->phone = $req->get('phone');
    }

    dd($req->imagee);
    // dd($req->imagee->extension());
    // image

    $doctor->date_of_birth = $req->get('date_of_birth');
    $doctor->clinic = intval($req->clinic);

    if ($req->speciality) {
      $doctor->specialities = implode(", ", $req->get('speciality'));
    }

    $doctor->save();
    if (
      $req->mon != null || $req->tue != null || $req->wed != null ||
      $req->thu != null || $req->fri != null || $req->sat != null ||
      $req->sun != null
    ) {
      $workDay = new ClinicWorkDay;
      $workDay->doctor_id = $doctor->id;
      if ($req->mon != null) {
        $workDay->mon = $req->monstart . ' - ' . $req->monend;
      }
      if ($req->tue != null) {
        $workDay->tue = $req->tuestart . ' - ' . $req->tueend;
      }
      if ($req->wed != null) {
        $workDay->wed = $req->wedstart . ' - ' . $req->wedend;
      }
      if ($req->thu != null) {
        $workDay->thu = $req->thustart . ' - ' . $req->thuend;
      }
      if ($req->fri != null) {
        $workDay->fri = $req->fristart . ' - ' . $req->friend;
      }
      if ($req->sat != null) {
        $workDay->sat = $req->satstart . ' - ' . $req->satend;
      }
      if ($req->sun != null) {
        $workDay->sun = $req->sunstart . ' - ' . $req->sunend;
      }
      $workDay->save();
      $doctor->workDays = $workDay->id;
      $doctor->save();
    }

    if ($req->get('experience')) {
      $doctor->experience = $req->get('experience');
    }
    if ($req->get('summary')) {
      $doctor->summary = $req->get('summary');
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
    return view('dashboards.admins.components.tab');
  }
}
