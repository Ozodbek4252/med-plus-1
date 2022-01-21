<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Address;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'city_uz',
        'city_ru',
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
