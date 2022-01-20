<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id',
        'doctor_id',
        'email',
        'tg',
        'insta',
        'fb'
    ];

    public function clinic()
    {
        // return $this->hasOne(Clinic::class);
    }
}
