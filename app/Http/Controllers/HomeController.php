<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
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
