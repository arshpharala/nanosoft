<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Url;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $testimonials = Testimonial::get();

        $data['testimonials'] = $testimonials;

        return view('home', $data);
    }

    function service(){
        return view('service-detail');
    }

    function serviceDetail($slug){


        $service = \App\Models\Service::whereHas('url', function($url) use($slug){
            $url->where('url',$slug);
        })->firstOrFail();

        $data['service'] = $service;

        return view('service-detail', $data);
    }

    function contact(){
        return view('contact');
    }

    function about(){

    }

    function privacy(){

    }

    function terms(){

    }
}
