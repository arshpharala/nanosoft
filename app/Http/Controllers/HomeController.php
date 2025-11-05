<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Url;
use App\Models\Page;
use App\Models\Enquiry;
use App\Models\Industry;
use App\Models\Location;
use App\Models\News;
use App\Models\Service;
use App\Models\Statistic;
use App\Models\Subscriber;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $testimonials = Testimonial::get();
        $categories = Category::all();
        $industries = Industry::get();
        $statistics = Statistic::get();

        $data['categories'] = $categories;
        $data['testimonials'] = $testimonials;
        $data['industries'] = $industries;
        $data['statistics'] = $statistics;
        $data['services'] = Service::with('category')->has('category')->get();


        $page = Page::with('meta', 'sections')
            ->where('slug', 'home')
            ->where('is_active',  true)
            ->first();

        $data['page'] = $page;
        $data['meta'] = $page->meta ?? null;

        return view('theme.home', $data);
    }

    function service()
    {
        $services = Service::get();
        $categories = Category::get();

        $data['services'] = $services;
        $data['categories'] = $categories;


        $slug = request()->segment(1);
        $page = Page::with('meta', 'sections')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        $data['page'] = $page;
        $data['meta'] = $page->meta ?? null;


        return view('theme.services', $data);
    }

    public function serviceDetail($categorySlug, $serviceSlug)
    {
        $service = Service::where('slug', $serviceSlug)
            ->whereHas('category', function ($query) use ($categorySlug) {
                $query->where('slug', $categorySlug);
            })->firstOrFail();

        $data['service'] = $service;
        $data['meta'] = $service->meta ?? '';

        return view('theme.service-detail', $data);
    }

    function contact()
    {
        $locations = Location::all();
        $data['locations'] = $locations;

        $slug = request()->segment(1);
        $page = Page::with('meta', 'sections')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        $data['page'] = $page;
        $data['meta'] = $page->meta ?? null;

        return view('theme.contact', $data);
    }

    function subscribe(Request $request)
    {

        $request->validate([
            'consent'    => 'required',
            'email'        => 'required|email|max:150'
        ]);

        Subscriber::firstOrCreate(
            [
                'email' => $request->email
            ],
            [
                'ip' => $request->ip()
            ]
        );

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Subscribed successfully!']);
        }

        return back()->with('success', 'Subscribed successfully!');
    }

    public function enquiry(Request $request)
    {
        $data = $request->validate([
            'first_name'   => 'required|string|max:100',
            'last_name'    => 'nullable|string|max:100',
            'company'      => 'nullable|string|max:150',
            'email'        => 'required|email|max:150',
            'phone'        => 'nullable|string|max:20',
            'service_id'   => 'nullable|exists:services,id',
            'message'      => 'nullable|string|max:2000',
        ]);

        $data['ip'] = $request->ip();

        $enquiry = Enquiry::create($data);

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Enquiry submitted successfully!']);
        }

        return back()->with('success', 'Enquiry submitted successfully!');
    }

    function page($slug)
    {
        $page = Page::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('theme.pages.dynamic', compact('page'));
    }

    function about()
    {
        $slug = request()->segment(1);
        $page = Page::with('meta', 'sections')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        $data['page'] = $page;
        $data['meta'] = $page->meta ?? null;

        return view('theme.about-us', $data);
    }

    function privacy()
    {
        $slug = request()->segment(1);
        $page = Page::with('meta', 'sections')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        $data['page'] = $page;
        $data['meta'] = $page->meta ?? null;

        return view('theme.privacy', $data);
    }

    function terms()
    {
        $slug = request()->segment(1);
        $page = Page::with('meta', 'sections')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        $data['page'] = $page;
        $data['meta'] = $page->meta ?? null;

        return view('theme.terms', $data);
    }

    function licence()
    {
        $slug = request()->segment(1);
        $page = Page::with('meta', 'sections')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        $data['page'] = $page;
        $data['meta'] = $page->meta ?? null;

        return view('theme.licence', $data);
    }

    function slavery()
    {
        $slug = request()->segment(1);
        $page = Page::with('meta', 'sections')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        $data['page'] = $page;
        $data['meta'] = $page->meta ?? null;

        return view('theme.slavery', $data);
    }

    function news()
    {

        $newsCollection = News::news()->latest()->get();
        $news           = $newsCollection->first();

        $data['news'] = $news;
        $data['newsCollection'] = $newsCollection->whereNotIn('id', [$news->id]);


        $slug = request()->segment(1);
        $page = Page::with('meta', 'sections')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        $data['page'] = $page;
        $data['meta'] = $page->meta ?? null;

        return view('theme.news', $data);
    }

    function newsDetail($slug)
    {

        $news = News::where('slug', $slug)->firstOrFail();
        $relatedNews = News::Where('category_id', $news->category_id)->whereNotIn('id', [$news->id])->get();

        $data['relatedNews'] = $relatedNews;
        $data['news'] = $news;
        $data['meta'] = $news->meta ?? '';

        return view('theme.news-detail', $data);
    }
    function educationalGuide()
    {

        $newsCollection = News::guide()->latest()->get();

        $data['newsCollection'] = $newsCollection;


        $slug = request()->segment(1);
        $page = Page::with('meta', 'sections')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        $data['page'] = $page;
        $data['meta'] = $page->meta ?? null;

        return view('theme.educational-guide', $data);
    }

    function educationalGuideDetail($slug)
    {

        $news = News::where('slug', $slug)->firstOrFail();
        $relatedNews = News::Where('category_id', $news->category_id)->whereNotIn('id', [$news->id])->get();

        $data['relatedNews'] = $relatedNews;
        $data['news'] = $news;
        $data['meta'] = $news->meta ?? '';

        return view('theme.news-detail', $data);
    }
}
