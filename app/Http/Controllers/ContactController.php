<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\TextContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $imagesIds = [10];
        $images = Image::whereIn('id', $imagesIds)->get();

        $texts = TextContact::all();

        return view('front.contact-1', compact('images', 'texts'));
    }
}
