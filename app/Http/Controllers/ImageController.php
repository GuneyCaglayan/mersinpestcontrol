<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Video;
use DB;


class ImageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('image');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image'))
        {
            $var = $request->file('image');
            $name = $request->input('name');
            $var->move(\public_path('/files'), $name . '.' . $var->getClientOriginalExtension());
        }

        Image::create($data);
        return redirect('/home/image');
    }

    public function show(Image $images, Video $videos)
    {
        $images = DB::table('images')
                        ->get();
        
        $videos = DB::table('videos')
                        ->get();

        return view('index', [
            'images' => $images,
            'videos' => $videos,
        ]);
    }
}