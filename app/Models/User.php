<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
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
