<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }
    public function create()
    {
        return view('roles.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'RoleName' => 'required|unique:roles|max:50',
        ]);
        Role::create($request->all());
        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'RoleName' => 'required|max:50|unique:roles,RoleName,' . $role->RoleId,
        ]);
        $role->update($request->all());
        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
