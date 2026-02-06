@extends('layouts.app')

@section('title', 'Vehicle Detail')

@section('content')
<div class="p-6">

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- INFO VEHICLE -->
        <div class="bg-white rounded-xl shadow p-5">
            <h2 class="text-xl font-semibold mb-4">
                {{ $vehicle['name'] }}
            </h2>

            <p class="text-gray-600">Plate</p>
            <p class="font-medium mb-3">
                {{ $vehicle['plate'] }}
            </p>

            <p class="text-gray-600">Status</p>
            <p class="font-medium mb-3">
                {{ ucfirst($vehicle['status']) }}
            </p>

            <p class="text-gray-600">Speed</p>
            <p class="font-medium">
                {{ $vehicle['speed'] }} km/h
            </p>
        </div>

        <!-- MAP -->
        <div class="lg:col-span-2">
            <div id="map" class="w-full h-[500px] rounded-xl shadow"></div>
        </div>

    </div>

</div>
@endsection


<script>
document.addEventListener("DOMContentLoaded", function () {

    var map = L.map('map').setView(
        [{{ $vehicle['lat'] }}, {{ $vehicle['lng'] }}],
        13
    );

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
    }).addTo(map);

    L.marker([{{ $vehicle['lat'] }}, {{ $vehicle['lng'] }}])
        .addTo(map)
        .bindPopup("{{ $vehicle['name'] }}")
        .openPopup();

});
</script>
