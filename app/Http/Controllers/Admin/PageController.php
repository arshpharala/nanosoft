<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::latest()->get();

        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:pages,slug',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        $page = Page::create([
            'title' => $request->title,
            'tagline' => $request->tagline,
            'slug' => $request->slug,
            'is_active' => $request->has('is_active'),
        ]);

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('pages', 'public');
            $page->banner = $banner;
            $page->save();
        }

        // Store meta
        $page->meta()->create([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        // Handle sections
        foreach ($request->input('section', []) as $key => $sectionData) {
            $imagePath = null;

            if ($request->hasFile("section.$key.image")) {
                $imagePath = $request->file("section.$key.image")->store('sections', 'public');
            }


            $page->sections()->create([
                'heading' => $sectionData['heading'] ?? null,
                'content' => $sectionData['content'] ?? null,
                'image' => $imagePath
            ]);
        }

        return redirect()->route('admin.pages.index')->with('success', 'Page created successfully!');
    }


    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:pages,slug,' . $page->id,
            'tagline' => 'nullable|string',
            'is_active' => 'nullable|boolean',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        $page->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'tagline' => $request->tagline,
            'is_active' => $request->has('is_active'),
        ]);

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('pages', 'public');
            $page->banner = $banner;
            $page->save();
        }

        $page->meta()->updateOrCreate([], [
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        $existingSectionIds = [];

        foreach ($request->input('section', []) as $key => $sectionData) {
            $sectionId = $sectionData['id'] ?? null;
            $imagePath = null;

            if ($request->hasFile("section.$key.image")) {
                $imagePath = $request->file("section.$key.image")->store('sections', 'public');
            }

            $bulletPoints = [];
            foreach ($sectionData['bullet_points'] ?? [] as $bullet) {
                $bulletPoints[] = [
                    'title' => $bullet['title'] ?? '',
                    'description' => $bullet['description'] ?? '',
                ];
            }

            if ($sectionId) {
                $section = $page->sections()->find($sectionId);
                if ($section) {
                    $section->update([
                        'heading' => $sectionData['heading'] ?? null,
                        'content' => $sectionData['content'] ?? null,
                        'image' => $imagePath ?? $section->image,
                        'bullet_points' => $bulletPoints,
                    ]);
                    $existingSectionIds[] = $section->id;
                }
            } else {
                $newSection = $page->sections()->create([
                    'heading' => $sectionData['heading'] ?? null,
                    'content' => $sectionData['content'] ?? null,
                    'image' => $imagePath,
                    'bullet_points' => $bulletPoints,
                ]);
                $existingSectionIds[] = $newSection->id;
            }
        }

        // Optionally delete removed sections
        $page->sections()->whereNotIn('id', $existingSectionIds)->delete();


        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully');
    }


    public function destroy(Page $page)
    {
        $page->delete();
        return response()->json(['success' => true]);
    }
}
