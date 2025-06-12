<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::get();

        $data['services'] = $services;
        return view('admin.services.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        // Upload image
        $path = $request->file('image')->store('services', 'public');

        // Create Service
        $service = Service::create([
            'title' => $request->title,
            'image' => $path,
            'description' => $request->description,
            'is_active' => true,
        ]);

        $service->url()->updateOrCreate([], [
            'url' => $request->url,
        ]);

        // Attach meta info
        $service->meta()->create([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        // Check if it's an AJAX request
        if ($request->ajax()) {
            return response()->json([
                'message' => 'Service created successfully.',
                'redirect' => $request->input('redirect') ?? route('admin.services.index'),
            ]);
        }

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
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
    public function edit($id)
    {
        $service = Service::with('meta')->findOrFail($id);

        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('services', 'public');
            $service->image = $path;
        }

        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'is_active' => true,
        ]);

        $service->url()->updateOrCreate([], [
            'url' => $request->url,
        ]);

        $service->meta()->updateOrCreate([], [
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        return response()->json([
            'message' => 'Service updated successfully.',
            'redirect' => route('admin.services.index')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
    }
}
