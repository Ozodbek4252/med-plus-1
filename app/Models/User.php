<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
<<<<<<< HEAD
use App\models\Clinic;
=======
use App\Models\Clinic;
use App\Models\Address;
>>>>>>> 06729594bc6c827495c4edf33ef7caf0faf6e2e7

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'role',
        'last_name',
        'email',
        'password',
        'phone',
        'address',
        'gender',
        'dateofbirth'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

<<<<<<< HEAD
    // public function numbers()
    // {
    //     return $this->hasMany(Number::class);
    // }

    public function clinic()
    {
        return $this->hasOne(Clinic::class);
=======
    public function clinics()
    {
        return $this->hasMany(Clinic::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
>>>>>>> 06729594bc6c827495c4edf33ef7caf0faf6e2e7
    }
}
