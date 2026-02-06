@extends('layouts.app')

@section('title', 'Vehicles')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold">Vehicles</h1>

        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            + Add Vehicle
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($vehicles as $vehicle)
            <a href="{{ route('vehicles.show', $vehicle['id']) }}" class="block bg-white rounded-xl shadow hover:shadow-lg transition p-5">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-lg font-semibold">
                            {{ $vehicle['name'] }}
                        </h2>
                        <p class="text-sm text-gray-500">
                            {{ $vehicle['plate'] }}
                        </p>
                    </div>

                    <span class="px-3 py-1 text-xs rounded-full
                        {{ $vehicle['status'] === 'online'
                            ? 'bg-green-100 text-green-700'
                            : 'bg-gray-200 text-gray-600' }}">
                        {{ ucfirst($vehicle['status']) }}
                    </span>
                </div>

                <div class="mt-4 text-sm text-gray-600">
                    Speed:
                    <span class="font-medium text-gray-800">
                        {{ $vehicle['speed'] }} km/h
                    </span>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
