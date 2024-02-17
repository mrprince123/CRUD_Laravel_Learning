<?php

namespace App\Http\Controllers;

use App\Models\Learning;

class HomeAboutController extends Controller
{
    public function home()
    {
        $learning = Learning::all();
        $data = compact('learning');
        return view('home')->with($data);
    }

    public function about()
    {
        return view('about');
    }
}
