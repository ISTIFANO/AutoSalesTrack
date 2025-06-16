@extends('layouts.app')
@section('title', 'Vehicle Details')
@section('content')
    <h1>Vehicle Details</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Vehicle ID:</strong> {{ $vehicle->VehicleId }}</li>
        <li class="list-group-item"><strong>Make:</strong> {{ $vehicle->Make }}</li>
        <li class="list-group-item"><strong>Model:</strong> {{ $vehicle->Model }}</li>
        <li class="list-group-item"><strong>Year:</strong> {{ $vehicle->Year }}</li>
        <li class="list-group-item"><strong>VIN:</strong> {{ $vehicle->VIN }}</li>
        <li class="list-group-item"><strong>Color:</strong> {{ $vehicle->Color }}</li>
        <li class="list-group-item"><strong>Price:</strong> {{ $vehicle->Price }}</li>
    </ul>
    <a href="{{ route('vehicles.index') }}" class="btn btn-secondary mt-3">Back to Vehicles</a>
@endsection