<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('auth.login');
});

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
  Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
  Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
  Route::get('users', [AdminController::class, 'users'])->name('admin.users');
  Route::get('clinics', [AdminController::class, 'clinics'])->name('admin.clinics');
  Route::get('addClinic/{id}', [AdminController::class, 'addClinic'])->name('admin.addClinic');
  Route::post('addClinicSave/{id}', [AdminController::class, 'addClinicSave'])->name('addClinicSave');
  Route::post('editClinic/{id}', [AdminController::class, 'editClinic'])->name('admin.editClinic');
});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function () {
  Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
  Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
  Route::get('completeacccount', [UserController::class, 'completeacccount'])->name('user.completeacccount');
  Route::post('completeacccount/{id}', [UserController::class, 'completeacccountSave'])->name('user.completeacccountSave');
  Route::get('clinics', [UserController::class, 'clinics'])->name('user.clinics');
  // Route::get('fetchData', [UserController::class, 'fetchData'])->name('fetchData');
});
