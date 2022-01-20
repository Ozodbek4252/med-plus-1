<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Clinic;
use App\models\Speciality;
use App\models\ClinicWorkDay;

class Doctor extends Model
{
  use HasFactory;

  protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'phone',
    'image',
    'date_of_birth',
    'clinic',
    'specialities',
    'workDays',
    'experience',
    'summary'
  ];

  public function clinic()
  {
    return $this->hasMany(Clinic::class);
  }

  public function speciality()
  {
    return $this->hasMany(Speciality::class);
  }

  public function clinicWorkDay()
  {
    return $this->hasOne(ClinicWorkDay::class);
  }
}
