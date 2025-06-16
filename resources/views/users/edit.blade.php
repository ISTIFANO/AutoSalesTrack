@extends('layouts.app')
@section('title', 'Edit User')
@section('content')
    <h1>Edit User</h1>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" id="Username" name="Username" value="{{ $user->Username }}" required>
        </div>
        <div class="mb-3">
            <label for="PasswordHash" class="form-label">Password</label>
            <input type="password" class="form-control" id="PasswordHash" name="PasswordHash" required>
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" name="Email" value="{{ $user->Email }}" required>
        </div>
        <div class="mb-3">
            <label for="Phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="Phone" name="Phone" value="{{ $user->Phone }}">
        </div>
        <div class="mb-3">
            <label for="RoleId" class="form-label">Role</label>
            <select class="form-select" id="RoleId" name="RoleId">
                <option value="">Select Role</option>
                @foreach($roles as $role)
                    <option value="{{ $role->RoleId }}" {{ $user->RoleId == $role->RoleId ? 'selected' : '' }}>{{ $role->RoleName }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update User</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection