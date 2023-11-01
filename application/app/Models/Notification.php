<?php

namespace App\Models;

use App\Enums\NotificationType;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['type', 'data'];

    protected $casts = [
        'type' => NotificationType::class,
    ];
}
