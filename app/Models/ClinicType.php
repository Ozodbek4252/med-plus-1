<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Clinic;

class ClinicType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_uz',
        'type_ru',
    ];

    public function clinics()
    {
        return $this->hasMany(Clinic::class, 'type');
    }
}
