<?php

namespace App\Http\Controllers;

class HomeAboutController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }
}
