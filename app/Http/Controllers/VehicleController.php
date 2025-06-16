<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
   public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }
    public function create()
    {
        return view('vehicles.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'Make' => 'required|max:50',
            'Model' => 'required|max:50',
            'Year' => 'required|integer',
            'VIN' => 'required|unique:vehicles|max:17',
            'Color' => 'nullable|max:30',
            'Price' => 'required|numeric',
        ]);
        Vehicle::create($request->all());
        return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully.');
    }
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }
    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'Make' => 'required|max:50',
            'Model' => 'required|max:50',
            'Year' => 'required|integer',
            'VIN' => 'required|max:17|unique:vehicles,VIN,' . $vehicle->VehicleId,
            'Color' => 'nullable|max:30',
            'Price' => 'required|numeric',
        ]);
        $vehicle->update($request->all());
        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully.');
    }
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully.');
    }
}
