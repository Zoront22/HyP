<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('images.images', compact('images'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            // 'location' => 'required|string|max:255',
        ]);


        $originalFileName = $request->file('image')->getClientOriginalName();

        $location = 'images';
        $path = $request->file('image')->storeAs("public/theme/{$location}/$originalFileName");

        $image = new Image();
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

        $image = Image::findOrFail($id);

        Storage::delete($image->path);

        $originalFileName = $request->file('image')->getClientOriginalName();

        $location = 'images';
        $path = $request->file('image')->storeAs("public/theme/{$location}/$originalFileName");

        $image->filename = $originalFileName;
        $image->location = $location;
        $image->path = $path;
        $image->save();

        return back()->with('success', 'Imagen actualizada exitosamente.');
    }

    public function delete($id)
    {
        $image = Image::findOrFail($id);

        Storage::delete($image->path);

        $image->delete();

        return back()->with('success', 'Imagen eliminada exitosamente.');
    }

    public function download($filename)
    {
        $filePath = public_path('public/theme/images/' . $filename);

        if (Storage::exists($filePath)) {
            return Storage::download($filePath);
        }

        return back()->with('error', 'Archivo no encontrado.');
    }

}
