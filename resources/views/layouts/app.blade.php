<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Vehicle Tracking')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

</head>
<body class="bg-gray-100 text-gray-800">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    @include('components.sidebar')

    <div class="flex-1 flex flex-col">

        {{-- Navbar --}}
        @include('components.navbar')

        {{-- Content --}}
        <main class="p-6">
            @yield('content')
        </main>

    </div>
</div>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

</body>
</html>
