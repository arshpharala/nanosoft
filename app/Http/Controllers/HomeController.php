<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    function service(){

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
