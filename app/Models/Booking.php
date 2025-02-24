<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    //many Booking to one User Relationsheep
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //many Booking to one Event Relationsheep
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
