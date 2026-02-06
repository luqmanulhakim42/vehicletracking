<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model {
    protected $fillable = ['vehicle_id','device_uid','api_key','status'];

    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }
}

