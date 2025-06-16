<?php

namespace App\Http\Controllers;

use App\Models\ServiceRecord;
use Illuminate\Http\Request;

class ServiceRecordController extends Controller
{
     public function index()
    {
        $serviceRecords = ServiceRecord::all();
        return view('service_records.index', compact('serviceRecords'));
    }
    public function create()
    {
        return view('service_records.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'VehicleId' => 'required|exists:vehicles,VehicleId',
            'ServiceDate' => 'nullable|date',
            'Description' => 'nullable|string',
            'Cost' => 'nullable|numeric',
        ]);
        ServiceRecord::create($request->all());
        return redirect()->route('service_records.index')->with('success', 'Service Record created successfully.');
    }
    public function show(ServiceRecord $serviceRecord)
    {
        return view('service_records.show', compact('serviceRecord'));
    }
    public function edit(ServiceRecord $serviceRecord)
    {
        return view('service_records.edit', compact('serviceRecord'));
    }
    public function update(Request $request, ServiceRecord $serviceRecord)
    {
        $request->validate([
            'VehicleId' => 'required|exists:vehicles,VehicleId',
            'ServiceDate' => 'nullable|date',
            'Description' => 'nullable|string',
            'Cost' => 'nullable|numeric',
        ]);
        $serviceRecord->update($request->all());
        return redirect()->route('service_records.index')->with('success', 'Service Record updated successfully.');
    }
    public function destroy(ServiceRecord $serviceRecord)
    {
        $serviceRecord->delete();
        return redirect()->route('service_records.index')->with('success', 'Service Record deleted successfully.');
    }
}
