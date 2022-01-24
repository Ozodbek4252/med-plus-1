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
    
    public function links()
    {
        return $this->hasOne(Link::class, 'clinic_id');
    }

    public function workingDay()
    {
        return $this->hasOne(WorkingDay::class);
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'clinic_doctors');
    }

    public function category()
    {
        return $this->belongsTo(ClinicCategory::class, 'category');
    }

    public function type()
    {
        return $this->belongsTo(ClinicType::class, 'type');
    }
}
