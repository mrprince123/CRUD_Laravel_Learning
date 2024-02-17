<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learning;

class LearningController extends Controller
{
    public function index()
    {
        return view('learning');
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'image_url' => 'required',
                'source' => 'required',
                'author' => 'required',
                'duration' => 'required',
                'description' => 'required',
                'redirect_url' => 'required'
            ]
        );

        $learning = new Learning;
        $learning->name = $request['name'];
        $learning->image_url = $request['image_url'];
        $learning->source = $request['source'];
        $learning->author = $request['author'];
        $learning->duration = $request['duration'];
        $learning->description = $request['description'];
        $learning->redirect_url = $request['redirect_url'];
        $learning->save();

        return redirect('learning-view');
    }

    public function view()
    {
        $learning = Learning::all();
        $data = compact('learning');
        return view('learning-view')->with($data);
    }

    public function update(Request $request, $id)
    {
    }

    public function delete(Request $request, $id)
    {
    }
}
