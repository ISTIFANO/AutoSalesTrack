<?php

namespace App\Http\Controllers;

use App\Models\TestDrive;
use Illuminate\Http\Request;

class TestDriveController extends Controller
{
   public function index()
    {
        $testDrives = TestDrive::all();
        return view('test_drives.index', compact('testDrives'));
    }
    public function create()
    {
        return view('test_drives.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'CustomerId' => 'required|exists:customers,CustomerId',
            'VehicleId' => 'required|exists:vehicles,VehicleId',
            'TestDriveDate' => 'nullable|date',
            'Status' => 'nullable|max:20',
        ]);
        TestDrive::create($request->all());
        return redirect()->route('test_drives.index')->with('success', 'Test Drive created successfully.');
    }
    public function show(TestDrive $testDrive)
    {
        return view('test_drives.show', compact('testDrive'));
    }
    public function edit(TestDrive $testDrive)
    {
        return view('test_drives.edit', compact('testDrive'));
    }
    public function update(Request $request, TestDrive $testDrive)
    {
        $request->validate([
            'CustomerId' => 'required|exists:customers,CustomerId',
            'VehicleId' => 'required|exists:vehicles,VehicleId',
            'TestDriveDate' => 'nullable|date',
            'Status' => 'nullable|max:20',
        ]);
        $testDrive->update($request->all());
        return redirect()->route('test_drives.index')->with('success', 'Test Drive updated successfully.');
    }
    public function destroy(TestDrive $testDrive)
    {
        $testDrive->delete();
        return redirect()->route('test_drives.index')->with('success', 'Test Drive deleted successfully.');
    }
}
