<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\ClinicAddress;
use App\models\ClinicLink;
use App\models\ClinicWorkDay;
use App\models\Doctor;
use App\models\User;

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

    public function owner()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function link()
    {
        return $this->hasOne(Link::class, 'clinic_id', 'link');
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
