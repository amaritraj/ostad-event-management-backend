<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasFactory;


    protected $fillable = ['role', 'name', 'email', 'password', 'profile_image'];

    //one user many to Booking relationsheep
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    //one user many to Notification Relationsheep
    public function notifications(): HasMany
    {
        return $this->hasMany(related: Notification::class);
    }
}
