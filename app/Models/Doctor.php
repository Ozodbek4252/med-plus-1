<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
