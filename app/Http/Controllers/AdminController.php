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

  function addClinic()
  {
    $clinic = Clinic::all();
    $address = ClinicAddress::all();
    // $clinic[0]->clinicAddress;
    // $address[0]->clinic;
    
    
    
    $owner = User::all();
    $clinicCategory = ClinicCategory::all();
    $clinicType = ClinicType::all();
    $doctors = Doctor::all();
    $states = State::all();


    return view('dashboards.admins.components.addClinic', 
                compact('owner', 'clinicCategory', 'clinicType', 'doctors', 'states'));
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

    $clinics = Clinic::all();
    $owner = User::all();
    // change to Address which is new model
    $clinicAddress = ClinicAddress::all();
    $workingDay = WorkingDay::all();
    $link = Link::all();
    foreach($clinicAddress as $clinicAddress){
      if($clinicAddress->state==null) {
        $clinicAddress->state = 0;
      }
      if($clinicAddress->city==null){
        $clinicAddress->city = 0;
      }
      if($clinicAddress->street==null){
        $clinicAddress->street = 0;
      }
      if($clinicAddress->apartment==null){
        $clinicAddress->apartment = 0;
      }
    }

    // dd($clinics[0]->clinicAddress->street);
    
    // dd($clinics[0]->owner);
    // dd($clinic[0]->link);
    // dd($clinic[0]->clinicAddress);

    return view("dashboards.admins.components.clinicTable", 
              compact("clinics", "clinicAddress", "workingDay", "link"));
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
    

    // dd($req->image->extension());
    // image

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
    $doctor = Doctor::find(1);

    // $specialityids = [1, 3, 6, 9];
    // $doctor->specialities()->attach($specialityids);

    // dd($doctor->workingDay);
    return view('dashboards.admins.components.tab');
  }
}
