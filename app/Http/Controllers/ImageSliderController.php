<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageSliderController extends Controller
{
    public function index()
    {
        // Mostrar todas las imágenes
        $images = Storage::files('public/theme/images/sliders');
        return view('images.images-sliders', compact('images'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('public/theme/images/sliders', $imageName);

        return redirect()->route('images-sliders.index')->with('success', 'Imagen subida exitosamente.');
    }

    public function update(Request $request, $filename)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Eliminar la imagen anterior
        Storage::delete('public/theme/images/sliders/'.$filename);

        // Subir la nueva imagen
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('public/theme/images/sliders', $imageName);

        return redirect()->route('images-sliders.index')->with('success', 'Imagen actualizada exitosamente.');
    }

    public function delete($filename)
    {
        $filePath = 'public/theme/images/' . $filename;

        if (Storage::exists($filePath)) {
            Storage::delete($filePath);
            return back()->with('success', 'Archivo eliminado exitosamente.');
        }

        return back()->with('error', 'Archivo no encontrado.');
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
