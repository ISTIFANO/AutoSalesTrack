<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
   public function index()
    {
        $sales = Sale::all();
        return view('sales.index', compact('sales'));
    }
    public function create()
    {
        return view('sales.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'VehicleId' => 'required|exists:vehicles,VehicleId',
            'CustomerId' => 'required|exists:customers,CustomerId',
            'SaleDate' => 'nullable|date',
            'SalePrice ' => 'required|numeric',
            'PaymentId' => 'nullable|exists:payments,PaymentId',
        ]);
        Sale::create($request->all());
        return redirect()->route('sales.index')->with('success', 'Sale created successfully.');
    }
    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }
    public function edit(Sale $sale)
    {
        return view('sales.edit', compact('sale'));
    }
    public function update(Request $request, Sale $sale)
    {
        $request->validate([
            'VehicleId' => 'required|exists:vehicles,VehicleId',
            'CustomerId' => 'required|exists:customers,CustomerId',
            'SaleDate' => 'nullable|date',
            'SalePrice' => 'required|numeric',
            'PaymentId' => 'nullable|exists:payments,PaymentId',
        ]);
        $sale->update($request->all());
        return redirect()->route('sales.index')->with('success', 'Sale updated successfully.');
    }
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sales.index')->with('success', 'Sale deleted successfully.');
    }
}
