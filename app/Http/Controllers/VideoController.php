<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use DB;


class VideoController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('video');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'video' => 'required',
        ]);

        if ($request->hasFile('video'))
        {   
            $var = $request->file('video');
            $name = $request->input('name');
            $var->move(\public_path('/video'), $name . '.' . $var->getClientOriginalExtension());
        }
        Video::create($data);
        return redirect('/home');
    }
}