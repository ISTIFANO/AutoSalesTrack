<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
  
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }
    public function create()
    {
        return view('customers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'FirstName' => 'required|max:50',
            'LastName' => 'required|max:50',
            'Email' => 'required|email|unique:customers|max:100',
            'Phone' => 'nullable|max:15',
        ]);
        Customer::create($request->all());
        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'FirstName' => 'required|max:50',
            'LastName' => 'required|max:50',
            'Email' => 'required|email|max:100|unique:customers,Email,' . $customer->CustomerId,
            'Phone' => 'nullable|max:15',
        ]);
        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}
