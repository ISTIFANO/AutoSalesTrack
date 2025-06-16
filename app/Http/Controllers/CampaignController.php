<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
     public function index()
    {
        $campaigns = Campaign::all();
        return view('campaigns.index', compact('campaigns'));
    }
    public function create()
    {
        return view('campaigns.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'CampaignName' => 'required|max:100',
            'StartDate' => 'nullable|date',
            'EndDate' => 'nullable|date',
            'DiscountPercentage' => 'nullable|numeric',
        ]);
        Campaign::create($request->all());
        return redirect()->route('campaigns.index')->with('success', 'Campaign created successfully.');
    }
    public function show(Campaign $campaign)
    {
        return view('campaigns.show', compact('campaign'));
    }
    public function edit(Campaign $campaign)
    {
        return view('campaigns.edit', compact('campaign'));
    }
    public function update(Request $request, Campaign $campaign)
    {
        $request->validate([
            'CampaignName' => 'required|max:100',
            'StartDate' => 'nullable|date',
            'EndDate' => 'nullable|date',
            'DiscountPercentage' => 'nullable|numeric',
        ]);
        $campaign->update($request->all());
        return redirect()->route('campaigns.index')->with('success', 'Campaign updated successfully.');
    }
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        return redirect()->route('campaigns.index')->with('success', 'Campaign deleted successfully.');
    }
}
