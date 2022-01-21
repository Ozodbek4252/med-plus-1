<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Address;
use App\models\Link;
use App\models\Doctor;
use App\models\WorkingDay;
use App\models\ClinicCategory;
use App\models\ClinicType;

class Clinic extends Model
{
    use HasFactory;

    protected $table = 'clinics';

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'location',
        'logo',
        'info_ru',
        'info_uz',
        'type',
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
    
    public function link()
    {
        return $this->hasOne(Link::class);
    }

    public function workingDay()
    {
        return $this->hasOne(WorkingDay::class);
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_specialities');
    }

    public function categories()
    {
        return $this->belongsToMany(ClinicCategory::class, 'clinic_clinic_categories');
    }

    public function type()
    {
        return $this->belongsTo(ClinicType::class, 'clinic_clinic_categories');
    }
}
