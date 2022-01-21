<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Address;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_ru',
        'state_uz',
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
