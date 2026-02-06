<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model {
    protected $fillable = ['user_id','vehicle_name','plate_number','type','status'];

    public function device() {
        return $this->hasOne(Device::class);
    }

    public function trackingLogs() {
        return $this->hasMany(TrackingLog::class);
    }
}