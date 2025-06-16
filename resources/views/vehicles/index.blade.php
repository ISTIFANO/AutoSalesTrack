@extends('layouts.app')
@section('title', 'Vehicles')
@section('content')
    <h1>Vehicles</h1>
    <a href="{{ route('vehicles.create') }}" class="btn btn-primary mb-3">Create Vehicle</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Vehicle ID</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>VIN</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->Vehicle Id }}</td>
                    <td>{{ $vehicle->Make }}</td>
                    <td>{{ $vehicle->Model }}</td>
                    <td>{{ $vehicle->Year }}</td>
                    <td>{{ $vehicle->VIN }}</td>
                    <td>
                        <a href="{{ route('vehicles.edit', $vehicle) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection