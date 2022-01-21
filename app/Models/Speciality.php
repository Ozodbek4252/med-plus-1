<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Doctor;

class Speciality extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ru',
        'name_uz',
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_specialities');
    }
}
