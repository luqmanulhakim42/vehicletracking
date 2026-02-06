<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackingLog extends Model {
    protected $fillable = [
        'vehicle_id',
        'device_id',
        'latitude',
        'longitude',
        'speed',
        'engine_status',
        'recorded_at'
    ];

    protected $casts = [
        'recorded_at' => 'datetime'
    ];
}
