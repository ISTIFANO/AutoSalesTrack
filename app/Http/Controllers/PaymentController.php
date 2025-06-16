<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
  public function index()
    {
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }
    public function create()
    {
        return view('payments.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'SaleId' => 'required|exists:sales,SaleId',
            'PaymentDate' => 'nullable|date',
            'Amount' => 'required|numeric',
            'PaymentMethod' => 'nullable|max:50',
            'Status' => 'nullable|max:20',
        ]);
        Payment::create($request->all());
        return redirect()->route('payments.index')->with('success', 'Payment created successfully.');
    }
    public function show(Payment $payment)
    {
        return view('payments.show', compact('payment'));
    }
    public function edit(Payment $payment)
    {
        return view('payments.edit', compact('payment'));
    }
    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'SaleId' => 'required|exists:sales,SaleId',
            'PaymentDate' => 'nullable|date',
            'Amount' => 'required|numeric',
            'PaymentMethod' => 'nullable|max:50',
            'Status' => 'nullable|max:20',
        ]);
        $payment->update($request->all());
        return redirect()->route('payments.index')->with('success', 'Payment updated successfully.');
    }
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'Payment deleted successfully.');
    }
}
