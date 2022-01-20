<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_uz',
        'category_ru',
    ];
}
