@extends('layouts.app')
@section('title', 'Create Vehicle')
@section('content')
    <h1>Create Vehicle</h1>
    <form action="{{ route('vehicles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Make" class="form-label">Make</label>
            <input type="text" class="form-control" id="Make" name="Make" required>
        </div>
        <div class="mb-3">
            <label for="Model" class="form-label">Model</label>
            <input type="text" class="form-control" id="Model" name="Model" required>
        </div>
        <div class="mb-3">
            <label for="Year" class="form-label">Year</label>
            <input type="number" class="form-control" id="Year" name="Year" required>
        </div>
        <div class="mb-3">
            <label for="VIN" class="form-label">VIN</label>
            <input type="text" class="form-control" id="VIN" name="VIN" required>
        </div>
        <div class="mb-3">
            <label for="Color" class="form-label">Color</label>
            <input type="text" class="form-control" id="Color" name="Color">
        </div>
        <div class="mb-3">
            <label for="Price" class="form-label">Price</label>
            <input type="number" class="form-control" id="Price" name="Price" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Vehicle</button>
        <a href="{{ route('vehicles.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection