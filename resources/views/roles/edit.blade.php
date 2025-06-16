@extends('layouts.app')
@section('title', 'Edit Role')
@section('content')
    <h1>Edit Role</h1>
    <form action="{{ route('roles.update', $role) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="RoleName" class="form-label">Role Name</label>
            <input type="text" class="form-control" id="RoleName" name="RoleName" value="{{ $role->RoleName }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Role</button>
        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection