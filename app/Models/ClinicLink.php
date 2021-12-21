<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id',
        'email',
        'tg',
        'insta',
        'fb'
    ];
}
