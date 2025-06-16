@extends('layouts.app')
@section('title', 'Role Details')
@section('content')
    <h1>Role Details</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Role ID:</strong> {{ $role->RoleId }}</li>
        <li class="list-group-item"><strong>Role Name:</strong> {{ $role->RoleName }}</li>
    </ul>
    <a href="{{ route('roles.index') }}" class="btn btn-secondary mt-3">Back to Roles</a>
@endsection