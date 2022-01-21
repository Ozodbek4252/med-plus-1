<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\WorkingDay;
use App\models\Speciality;
use App\models\Address;
use App\models\Clinic;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';

    protected $fillable = [
        'first_name_ru',
        'first_name_uz',
        'last_name_ru',
        'last_nameuz',
        'email',
        'phone',
        'image',
        'date_of_birth',
        'experience',
        'summary_ru',
        'summary_uz',
    ];

    // public function clinic()
    // {
    //     return $this->hasMany(Clinic::class);
    // }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'doctor_specialities');
    }

    public function workingDay()
    {
        return $this->hasOne(WorkingDay::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function clinics()
    {
        return $this->belongsToMany(Clinic::class, 'clinic_doctors');
    }
}
