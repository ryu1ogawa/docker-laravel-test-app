<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    public function members() {
        return $this->hasMany(Member::class);
    }

    protected $fillable = [
        'last_name',
        'first_name',
        'name',
        'last_name_reading',
        'first_name_reading',
        'name_reading',
        'postal_code',
        'prefectures',
        'municipalities',
        'house_number',
        'building_name',
        'telephone_number',
        'emergency_telephone_number',
        'email',
        'password',
        'employee',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
