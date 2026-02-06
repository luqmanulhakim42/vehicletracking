<x-layouts.app>
    <div class="grid grid-cols-4 gap-4">
        <!-- Vehicle List -->
        <div class="col-span-1 bg-white rounded shadow p-4">
            <h2 class="font-semibold mb-2">Vehicles</h2>

            <ul class="space-y-2">
                @foreach ($vehicles as $vehicle)
                    <li class="p-2 rounded hover:bg-gray-100 cursor-pointer">
                        {{ $vehicle->vehicle_name }}
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Map -->
        <div class="col-span-3 bg-white rounded shadow">
            <div id="map" class="h-[500px] w-full"></div>
        </div>
    </div>
</x-layouts.app>
