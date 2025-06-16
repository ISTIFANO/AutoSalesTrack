@extends('layouts.app')
@section('title', 'Edit Vehicle')
@section('content')
    <h1>Edit Vehicle</h1>
    <form action="{{ route('vehicles.update', $vehicle) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Make" class="form-label">Make</label>
            <input type="text" class="form-control" id="Make" name="Make" value="{{ $vehicle->Make }}" required>
        </div>
        <div class="mb-3">
            <label for="Model" class="form-label">Model</label>
            <input type="text" class="form-control" id="Model" name="Model" value="{{ $vehicle->Model }}" required>
        </div>
        <div class="mb-3">
            <label for="Year" class="form-label">Year</label>
            <input type="number" class="form-control" id="Year" name="Year" value="{{ $vehicle->Year }}" required>
        </div>
        <div class="mb-3">
            <label for="VIN" class="form-label">VIN</label>
            <input type="text" class="form-control" id="VIN" name="VIN" value="{{ $vehicle->VIN }}" required>
        </div>
        <div class="mb-3">
            <label for="Color" class="form-label">Color</label>
            <input type="text" class="form-control" id="Color" name="Color" value="{{ $vehicle->Color }}">
        </div>
        <div class="mb-3">
            <label for="Price" class="form-label">Price</label>
            <input type="number" class="form-control" id="Price" name="Price" value="{{ $vehicle->Price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Vehicle</button>
        <a href="{{ route('vehicles.index') }}" class="btn btn-secondary ">Cancel</a>
    </form>
@endsection