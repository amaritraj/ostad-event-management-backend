<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    //Many Notification to one User Relationsheep
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
