<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Farmer;
use App\Models\Seeker;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'age',
        'phone_number',
        'is_farmer',
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
        'password' => 'hashed',
    ];


public function farmerProfile() {
    return $this->hasOne(Farmer::class, 'user_id');
}

public function seekerProfile() {
    return $this->hasOne(Seeker::class, 'user_id');
}

public function profile() {
    return $this->status === 0 ? $this->farmerProfile() : $this->seekerProfile();
}

public function farmers() {
        return $this->hasOne(Farmer::class);
    }

    public function seekers() {
        return $this->hasOne(Seeker::class);
    }
}
