<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    // one Even then Many Booking Relationsheep
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
