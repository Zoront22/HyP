<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\ImageSlider;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $imagesIds = [8,9,11,20];
        $images = Image::whereIn('id', $imagesIds)->get();

        $ids = [2,3,4,20,];
        $sliders = ImageSlider::whereIn('id', $ids)->get();

        return view('front.about', compact('images', 'sliders'));
    }
}
