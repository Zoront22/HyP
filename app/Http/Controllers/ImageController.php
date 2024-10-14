<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();  // Obtener todas las imágenes desde la base de datos
        return view('images.images', compact('images'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            // 'location' => 'required|string|max:255', // Ubicación de la imagen
        ]);

        //Obtener el nombre original de la imagen subida
        $originalFileName = $request->file('image')->getClientOriginalName();

        // Subir la imagen
        $location = 'images';
        $path = $request->file('image')->storeAs("public/theme/{$location}/$originalFileName");

        // Guardar la información en la base de datos
        $image = new Image();
        $image->filename = $originalFileName; // Nombre original
        $image->location = $location;  // Ubicación proporcionada por el usuario
        $image->path = $path;  // Ruta completa en el sistema de archivos
        $image->save();

        return back()->with('success', 'Imagen subida exitosamente.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'location' => 'required|string|max:255', // Ubicación de la imagen
        ]);

        $image = Image::findOrFail($id);

        // Eliminar la imagen antigua
        Storage::delete($image->path);

        //Obtener el nombre original de la imagen subida
        $originalFileName = $request->file('image')->getClientOriginalName();

        // Subir la nueva imagen
        $location = 'images';
        $path = $request->file('image')->storeAs("public/theme/{$location}/$originalFileName");

        // Actualizar la información en la base de datos
        $image->filename = $originalFileName;
        $image->location = $location;
        $image->path = $path;
        $image->save();

        return back()->with('success', 'Imagen actualizada exitosamente.');
    }

    public function delete($id)
    {
        $image = Image::findOrFail($id);

        // Eliminar el archivo del almacenamiento
        Storage::delete($image->path);

        // Eliminar el registro de la base de datos
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
