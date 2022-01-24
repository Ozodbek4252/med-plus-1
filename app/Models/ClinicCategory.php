<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Clinic;

class ClinicCategory extends Model
{
  use HasFactory;

  protected $fillable = [
    'category_uz',
    'category_ru',
  ];

  public function clinics()
  {
    return $this->hasMany(Clinic::class, 'category');
  }
}
