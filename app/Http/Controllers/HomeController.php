<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\ImageSlider;
use Illuminate\Http\Request;

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
        $imagesIds = [5,6,7];
        $images = Image::whereIn('id', $imagesIds)->get();

        $ids = [5,6,7,8,9,10,11,12,13,14,15,16,17,18,19];
        $sliders = ImageSlider::whereIn('id', $ids)->get();
        // dd($images);
        return view('front.index', compact('images', 'sliders'));
    }
}
