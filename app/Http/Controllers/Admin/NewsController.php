<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::with('category')->get();
        $categories = Category::all();
        $data['news'] = $news;
        $data['categories'] = $categories;

        return view('admin.news.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $data['categories'] = $categories;
        $data['tags'] = Tag::all();

        return view('admin.news.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'intro' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
            'category_id' => 'required|exists:categories,id',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);
        // Upload image
        $path = $request->file('image')->store('news', 'public');

        // Create Service
        $news = News::create([
            'title' => $request->title,
            'image' => $path,
            'slug' => $request->slug,
            'intro' => $request->intro,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'is_guide' => empty($request->is_guide) ? 0 : 1,
            'created_by' => auth()->user()->id,
        ]);


        // Attach meta info
        $news->meta()->create([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);


        $tagIds = [];

        if ($request->filled('tags')) {
            foreach ($request->tags as $tagInput) {
                if (is_numeric($tagInput)) {
                    $tagIds[] = (int) $tagInput;
                } else {
                    $tag = Tag::firstOrCreate(['name' => trim($tagInput)]);
                    $tagIds[] = $tag->id;
                }
            }

            $news->tags()->sync($tagIds);
        }


        // Check if it's an AJAX request
        if ($request->ajax()) {
            return response()->json([
                'message' => 'News created successfully.',
                'redirect' => $request->input('redirect') ?? route('admin.news.index'),
            ]);
        }

        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
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
        $news = News::findOrFail($id);
        $categories = Category::all();

        $data['tags'] = Tag::all();
        $data['news'] = $news;
        $data['categories'] = $categories;

        return view('admin.news.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = News::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'intro' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'category_id' => 'nullable|exists:categories,id',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('news', 'public');
            $news->image = $path;
        }


        $news->update([
            'title' => $request->title,
            'intro' => $request->intro,
            'content' => $request->content,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'is_guide' => empty($request->is_guide) ? 0 : 1,
        ]);



        $news->meta()->updateOrCreate([], [
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);


        $tagIds = [];

        if ($request->filled('tags')) {
            foreach ($request->tags as $tagInput) {
                if (is_numeric($tagInput)) {
                    $tagIds[] = (int) $tagInput;
                } else {
                    $tag = Tag::firstOrCreate(['name' => trim($tagInput)]);
                    $tagIds[] = $tag->id;
                }
            }

            $news->tags()->sync($tagIds);
        }


        return response()->json([
            'message' => 'News updated successfully.',
            'redirect' => route('admin.news.index')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);
        $news->delete();
    }
}
