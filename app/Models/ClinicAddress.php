<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Clinic;

class ClinicAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_id',
        'state',
        'city',
        'street',
        'apartment'
    ];

    public function clinic()
    {
        // return $this->hasOne(Clinic::class, 'address');
    }
}
