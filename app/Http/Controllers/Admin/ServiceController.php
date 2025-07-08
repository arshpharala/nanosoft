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
        $services = Service::with('category')->get();
        $categories = \App\Models\Category::all();

        return view('admin.services.index', compact('services', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = \App\Models\Category::all();
        return view('admin.services.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'short_description' => 'nullable|string|max:255',

            'section_heading' => 'required|string',
            'section_content' => 'required|string',
            'section_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',

            'why_choose' => 'required|string',
            'icon' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'banner' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
            'category_id' => 'nullable|exists:categories,id',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);
        // Upload image

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('services', 'public');
        }


        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('services', 'public');
        }

        if ($request->hasFile('section_image')) {
            $section_image = $request->file('section_image')->store('services', 'public');
        }

        if ($request->hasFile('section_2_image')) {
            $section_2_image = $request->file('section_2_image')->store('services', 'public');
        }

        $section_bullet_points = collect($request->section_bullet_points)
            ->filter(fn($item) => !empty($item['title']) || !empty($item['description']))
            ->values()
            ->toArray();

        


        // Create Service
        $service = Service::create([
            'title' => $request->title,
            'icon' => $iconPath ?? null,
            'banner' => $banner ?? null,
            'slug' => $request->slug,

            'section_heading' => $request->section_heading,
            'section_content' => $request->section_content,
            'section_image' => $section_image ?? null,
            'section_bullet_points' => $section_bullet_points,

            'section_2_heading' => $request->section_2_heading,
            'section_2_content' => $request->section_2_content,
            'section_2_image' => $section_2_image ?? null,

            'short_description' => $request->short_description,
            'why_choose' => $request->why_choose,
            'is_active' => true,
            'category_id' => $request->category_id,
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
        $categories = \App\Models\Category::all();
        $service = Service::with('meta')->findOrFail($id);
        return view('admin.services.edit', compact('service', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'short_description' => 'nullable|string|max:255',

            'section_heading' => 'required|string',
            'section_content' => 'required|string',
            'section_image' => 'nullable|image|mimes:jpeg,png,jpg|max:3072',

            'why_choose' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'category_id' => 'nullable|exists:categories,id',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);



        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('services', 'public');
            $service->banner = $banner;
        }

        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('services', 'public');
            $service->icon = $iconPath;
        }

        if ($request->hasFile('section_image')) {
            $section_image = $request->file('section_image')->store('services', 'public');
            $service->section_image = $section_image;
        }

        if ($request->hasFile('section_2_image')) {
            $section_2_image = $request->file('section_2_image')->store('services', 'public');
            $service->section_2_image = $section_2_image;
        }

        $section_bullet_points = collect($request->section_bullet_points)
            ->filter(fn($item) => !empty($item['title']) || !empty($item['description']))
            ->values()
            ->toArray();

        $service->update([
            'section_heading' => $request->section_heading,
            'section_content' => $request->section_content,
            'section_bullet_points' => $section_bullet_points,

            'section_2_heading' => $request->section_2_heading,
            'section_2_content' => $request->section_2_content,

            'title' => $request->title,
            'short_description' => $request->short_description,
            'why_choose' => $request->why_choose,
            'slug' => $request->slug,
            'is_active' => true,
            'category_id' => $request->category_id,
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
