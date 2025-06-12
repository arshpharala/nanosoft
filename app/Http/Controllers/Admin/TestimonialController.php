<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'testimonial' => 'required|string',
            'company_icon' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $data = $request->only('name', 'designation', 'testimonial');

        if ($request->hasFile('company_icon')) {
            $data['company_icon'] = $request->file('company_icon')->store('testimonials', 'public');
        }

        Testimonial::create($data);

        return response()->json([
            'message' => 'Testimonial added successfully.',
            'redirect' => route('admin.testimonials.index')
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
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'testimonial' => 'required|string',
            'company_icon' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $data = $request->only('name', 'designation', 'testimonial');

        if ($request->hasFile('company_icon')) {
            $data['company_icon'] = $request->file('company_icon')->store('testimonials', 'public');
        }

        $testimonial->update($data);

        return response()->json([
            'message' => 'Testimonial updated successfully.',
            'redirect' => route('admin.testimonials.index')
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return response()->json(['message' => 'Testimonial deleted successfully.']);
    }
}
