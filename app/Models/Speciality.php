<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ru',
        'name_uz',
    ];

    public function doctor()
    {
        // return $this->belongsTo(Doctor::class);
    }
}
