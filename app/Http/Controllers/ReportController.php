<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
     public function index()
    {
        $reports = Report::all();
        return view('reports.index', compact('reports'));
    }
    public function create()
    {
        return view('reports.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'ReportDate' => 'nullable|date',
            'TotalSales' => 'nullable|integer',
            'TotalRevenue' => 'nullable|numeric',
        ]);
        Report::create($request->all());
        return redirect()->route('reports.index')->with('success', 'Report created successfully.');
    }
    public function show(Report $report)
    {
        return view('reports.show', compact('report'));
    }
    public function edit(Report $report)
    {
        return view('reports.edit', compact('report'));
    }
    public function update(Request $request, Report $report)
    {
        $request->validate([
            'ReportDate' => 'nullable|date',
            'TotalSales' => 'nullable|integer',
            'TotalRevenue' => 'nullable|numeric',
        ]);
        $report->update($request->all());
        return redirect()->route('reports.index')->with('success', 'Report updated successfully.');
    }
    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->route('reports.index')->with('success', 'Report deleted successfully.');
    }
}
