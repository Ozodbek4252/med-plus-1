<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_uz',
        'type_ru',
    ];
}
