<?php

namespace App\Http\Controllers\Admin;

use App\Models\Stats;
use App\Models\Statistic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statistics = Statistic::get();
        $data['statistics'] = $statistics;

        return view('admin.statistics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.statistics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|unique:statistics,name',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'description' => 'required|string',
        ]);

        $iconPath = null;

        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('statistic-icons', 'public');
        }

        Statistic::create([
            'name' => $request->name,
            'description' => $request->description,
            'icon' => $iconPath
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Statistic Created.',
            'redirect' => route('admin.statistics.index')
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $statistic = Statistic::findOrFail($id);
        return view('admin.statistics.edit', compact('statistic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $statistic = Statistic::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:100|unique:statistics,name,' . $statistic->id,
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'description' => 'required|string'

        ]);

        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('statistic-icons', 'public');
            $statistic->icon = $iconPath;
            $statistic->save();
        }

        $statistic->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Statistic Updated.',
            'redirect' => route('admin.statistics.index')
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
