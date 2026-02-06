@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded shadow">
        <div class="text-gray-500 text-sm">Total Vehicle</div>
        <div class="text-2xl font-bold">12</div>
    </div>

    <div class="bg-white p-6 rounded shadow">
        <div class="text-gray-500 text-sm">Online</div>
        <div class="text-2xl font-bold text-green-600">8</div>
    </div>

    <div class="bg-white p-6 rounded shadow">
        <div class="text-gray-500 text-sm">Offline</div>
        <div class="text-2xl font-bold text-red-600">4</div>
    </div>

</div>
@endsection
