@extends('layouts.app')
@section('title', 'Create Role')
@section('content')
    <h1>Create Role</h1>
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="RoleName" class="form-label">Role Name</label>
            <input type="text" class="form-control" id="RoleName" name="RoleName" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Role</button>
        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection