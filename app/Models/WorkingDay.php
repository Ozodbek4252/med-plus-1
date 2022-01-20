<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id',
        'doctor_id',
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',
        'sat',
        'sun'
    ];

    // public function clinic()
    // {
    //     return $this->hasOne(Clinic::class);
    // }

    // public function doctor()
    // {
    //     return $this->hasOne(Doctor::class);
    // }
}
