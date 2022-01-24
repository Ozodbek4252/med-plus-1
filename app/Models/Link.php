<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Clinic;

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
        return $this->belongsTo(Clinic::class);
    }
}
