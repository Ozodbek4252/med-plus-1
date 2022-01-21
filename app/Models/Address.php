<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Doctor;
use App\models\Clinic;
use App\models\State;
use App\models\City;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id',
        'doctor_id',
        'state',
        'city',
        'street_ru',
        'street_uz',
        'apartment_ru',
        'apartment_uz',
        'moljal_ru',
        'moljal_uz',
    ];

    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function clinic()
    {
        return $this->hasOne(Clinic::class);
    }

    public function state()
    {
        return $this->hasOne(State::class);
    }

    // public function city()
    // {
    //     return $this->hasOne(City::class);
    // }
}
