<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Video;
use \App\Image;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show(Image $images, Video $videos)
    {
        $images = DB::table('images')
        ->get();

        $videos = DB::table('videos')
                ->get();

        return view('home', [
        'images' => $images,
        'videos' => $videos
        ]);
    }

    public function destroy(Image $image){
        
        $image->delete();
        return redirect('home');
    }

    public function destroyVideo(Video $video){
        
        $video->delete();
        return redirect('home');
    }
}