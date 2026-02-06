<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function store(Request $request)
    {
        $device = $request->device;

        $data = $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'speed' => 'nullable|numeric',
            'engine_status' => 'boolean',
            'recorded_at' => 'required|date'
        ]);

        TrackingLog::create([
            'vehicle_id' => $device->vehicle_id,
            'device_id' => $device->id,
            ...$data
        ]);

        $device->update([
            'last_online_at' => now(),
            'status' => 'online'
        ]);

        return response()->json(['status' => 'ok']);
    }

}
