<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\ClinicAddress;
use App\models\ClinicLink;
use App\models\ClinicWorkDay;
use App\models\Doctor;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'link',
        'phone',
        'address',
        'workday',
        'workday',
        'location'
    ];

    public function clinicAddress()
    {
        return $this->hasOne(ClinicAddress::class, 'clinic_id', 'address');
    }

    public function clinicLink()
    {
        return $this->hasOne(ClinicLink::class);
    }

    public function clinicWorkDay()
    {
        return $this->hasOne(ClinicWorkDay::class);
    }

    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }
}
