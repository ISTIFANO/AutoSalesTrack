<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::all();
        return view('inventories.index', compact('inventories'));
    }
    public function create()
    {
        return view('inventories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'VehicleId' => 'required|exists:vehicles,VehicleId',
            'Quantity' => 'required|integer',
        ]);
        Inventory::create($request->all());
        return redirect()->route('inventories.index')->with('success', 'Inventory created successfully.');
    }
    public function show(Inventory $inventory)
    {
        return view('inventories.show', compact('inventory'));
    }
    public function edit(Inventory $inventory)
    {
        return view('inventories.edit', compact('inventory'));
    }
    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'VehicleId' => 'required|exists:vehicles,VehicleId',
            'Quantity' => 'required|integer',
        ]);
        $inventory->update($request->all());
        return redirect()->route('inventories.index')->with('success', 'Inventory updated successfully.');
    }
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('inventories.index')->with('success', 'Inventory deleted successfully.');
    }
}