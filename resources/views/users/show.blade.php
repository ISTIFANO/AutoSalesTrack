@extends('layouts.app')
@section('title', 'User  Details')
@section('content')
    <h1>User Details</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Username:</strong> {{ $user->Username }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $user->Email }}</li>
        <li class="list-group-item"><strong>Phone:</strong> {{ $user->Phone }}</li>
        <li class="list-group-item"><strong>Role:</strong> {{ $user->role->RoleName ?? 'N/A' }}</li>
    </ul>
    <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back to Users</a>
@endsection