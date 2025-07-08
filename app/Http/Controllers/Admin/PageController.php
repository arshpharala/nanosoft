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
            'title' => 'required',
            'slug' => 'required|unique:pages,slug',
            'content' => 'nullable|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'is_active' => 'nullable|boolean',
            'tagline' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        $page = new Page();
        $page->title  = $request->title;
        $page->slug = $request->slug;
        $page->tagline = $request->tagline;

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('pages', 'public');
            $page->banner = $banner;
        }

        $page->is_active = $request->has('is_active');

        $page->section_heading = $request->section_heading;
        $page->section_content = $request->section_content;

        if ($request->hasFile('section_image')) {
            $section_image = $request->file('section_image')->store('services', 'public');
            $page->section_image = $section_image;
        }

        $page->section_2_heading = $request->section_2_heading;
        $page->section_2_content = $request->section_2_content;

        if ($request->hasFile('section_2_image')) {
            $section_2_image = $request->file('section_2_image')->store('services', 'public');
            $page->section_2_image = $section_2_image;
        }

        $page->save();


        // Attach meta info
        $page->meta()->create([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Page created successfully');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:pages,slug,' . $page->id,
            'is_active' => 'nullable|boolean',
            'tagline' => 'nullable|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner')->store('pages', 'public');
            $page->banner = $banner;
        }

        $page->is_active = $request->has('is_active');
        $page->tagline = $request->tagline;
        $page->save();

        $page->meta()->updateOrCreate([], [
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return response()->json(['success' => true]);
    }
}
