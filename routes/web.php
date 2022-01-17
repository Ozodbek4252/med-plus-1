<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
  return view('home');
});

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
  Auth::routes();
});

Route::get('/admin/login', [AdminLoginController::class, 'adminLoginIndex'])->name('admin.login');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/admin/login', [AdminLoginController::class, 'adminLogin'])->name('admin.loginning');

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
  Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
  Route::get('users', [AdminController::class, 'users'])->name('admin.users');
  Route::get('clinics', [AdminController::class, 'clinics'])->name('admin.clinics');
  Route::get('addClinic/{id}', [AdminController::class, 'addClinic'])->name('admin.addClinic');
  Route::post('addClinicSave/{id}', [AdminController::class, 'addClinicSave'])->name('addClinicSave');
  Route::get('editClinic/{id}', [AdminController::class, 'editClinic'])->name('admin.editClinic');
  Route::get('doctors', [AdminController::class, 'doctors'])->name('admin.doctors');
  Route::get('addDoctor', [AdminController::class, 'addDoctor'])->name('admin.addDoctor');
  Route::post('addDoctor', [AdminController::class, 'addDoctorSave'])->name('admin.addDoctor');
  Route::get('editDoctor/{id}', [AdminController::class, 'editDoctor'])->name('admin.editDoctor');
});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
  Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
  Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
  Route::get('completeacccount', [UserController::class, 'completeacccount'])->name('user.completeacccount');
  Route::post('completeacccount/{id}', [UserController::class, 'completeacccountSave'])->name('user.completeacccountSave');
  Route::get('clinics', [UserController::class, 'clinics'])->name('user.clinics');
  // Route::get('fetchData', [UserController::class, 'fetchData'])->name('fetchData');
});
