<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ImageSlider;

class ImageSliderController extends Controller
{
    public function index()
    {
        $images = ImageSlider::all();
        return view('images.images-sliders', compact('images'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            // 'location' => 'required|string|max:255',
        ]);

        $originalFileName = $request->file('image')->getClientOriginalName();

        $location = 'sliders';
        $path = $request->file('image')->storeAs("public/theme/{$location}/$originalFileName");

        $image = new ImageSlider();
        $image->filename = $originalFileName;
        $image->location = $location;
        $image->path = $path;
        $image->save();

        return back()->with('success', 'Imagen subida exitosamente.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            // 'location' => 'required|string|max:255',
        ]);

        $image = ImageSlider::findOrFail($id);

        Storage::delete($image->path);

        $originalFileName = $request->file('image')->getClientOriginalName();

        $location = 'sliders';
        $path = $request->file('image')->storeAs("public/theme/{$location}/$originalFileName");

        $image->filename = $originalFileName;
        $image->location = $location;
        $image->path = $path;
        $image->save();

        return back()->with('success', 'Imagen actualizada exitosamente.');
    }

    public function delete($id)
    {
        $image = ImageSlider::findOrFail($id);

        Storage::delete($image->path);

        $image->delete();

        return back()->with('success', 'Imagen eliminada exitosamente.');
    }

    public function download($filename)
    {
        $filePath = public_path('public/theme/images/sliders/' . $filename);

        if (Storage::exists($filePath)) {
            return Storage::download($filePath);
        }

        return back()->with('error', 'Archivo no encontrado.');
    }
}
