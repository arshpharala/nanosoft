<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Url;
use App\Models\Page;
use App\Models\Enquiry;
use App\Models\Industry;
use App\Models\Location;
use App\Models\Service;
use App\Models\Subscriber;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {

        $testimonials = Testimonial::get();

        $industries = Industry::get();

        $data['testimonials'] = $testimonials;
        $data['industries'] = $industries;

        return view('home', $data);
    }

    function service()
    {
        $services = Service::get();
        $categories = Category::get();

        $data['services'] = $services;
        $data['categories'] = $categories;
        return view('services', $data);
    }

    public function serviceDetail($categorySlug, $serviceSlug)
    {
        $service = \App\Models\Service::where('slug', $serviceSlug)
            ->whereHas('category', function ($query) use ($categorySlug) {
                $query->where('slug', $categorySlug);
            })->firstOrFail();

        return view('service-detail', compact('service'));
    }

    function contact()
    {
        $locations = Location::all();
        $data['locations'] = $locations;
        return view('contact', $data);
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
        return view('pages.dynamic', compact('page'));
    }

    function about()
    {
        return view('about-us');
    }

    function privacy()
    {
        return view('privacy');
    }

    function terms()
    {
        return view('terms');
    }

    function licence()
    {
        return view('licence');
    }

    function slavery()
    {
        return view('slavery');
    }
}
