<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        // sementara pakai dummy data dulu
        $vehicles = [
            [
                'id' => 1,
                'name' => 'Truck A',
                'plate' => 'B 1234 CD',
                'status' => 'online',
                'speed' => 45,
            ],
            [
                'id' => 2,
                'name' => 'Car B',
                'plate' => 'D 9876 EF',
                'status' => 'offline',
                'speed' => 0,
            ],
        ];

        return view('vehicles.index', compact('vehicles'));
    }

    public function show($id)
    {
        // dummy data dulu
        $vehicle = [
            'id' => $id,
            'name' => 'Truck A',
            'plate' => 'B 1234 CD',
            'status' => 'online',
            'speed' => 60,
            'lat' => -6.9175,
            'lng' => 107.6191,
        ];

        return view('vehicles.show', compact('vehicle'));
    }
}
