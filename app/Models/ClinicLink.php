<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Clinic;

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

    public function clinic()
    {
        return $this->hasOne(Clinic::class);
    }
}
