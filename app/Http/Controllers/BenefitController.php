<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($service_id)
    {
        $service = Service::findOrFail($service_id);
        $benefits = $service->benefits()->latest()->get();
        return view('admin.benefits.index', compact('service', 'benefits'));
    }

    public function create($service_id)
    {
        $service = Service::findOrFail($service_id);
        return view('admin.benefits.create', compact('service'));
    }

    public function store(Request $request, $service_id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:500',
        ]);
        $service = Service::findOrFail($service_id);
        $service->benefits()->create($request->only(['title', 'short_description']));

         // Check if it's an AJAX request
        if ($request->ajax()) {
            return response()->json([
                'message' => 'Benefit created successfully.',
                'redirect' => $request->input('redirect') ?? route('admin.service.benefits.index', ['service' => $service_id]),
            ]);
        }

        return redirect()->route('admin.service.benefits.index', ['service' => $service_id])->with('success', 'Benefit created successfully.');

    }

    public function edit($service_id, Benefit $benefit)
    {
        $service = Service::findOrFail($service_id);
        return view('admin.benefits.edit', compact('service', 'benefit'));
    }

    public function update(Request $request, $service_id, Benefit $benefit)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:500',
        ]);
        $benefit->update($request->only(['title', 'short_description']));

         // Check if it's an AJAX request
        if ($request->ajax()) {
            return response()->json([
                'message' => 'Benefit updated successfully.',
                'redirect' => $request->input('redirect') ?? route('admin.service.benefits.index', ['service' => $service_id]),
            ]);
        }

        return redirect()->route('admin.service.benefits.index', ['service' => $service_id])->with('success', 'Benefit updated successfully.');
    }

    public function destroy($service_id, Benefit $benefit)
    {
        $benefit->delete();
        
    }
}
