<?php

namespace App\Http\Controllers;

use App\Models\TextHome;
use Illuminate\Http\Request;

class TextHomeController extends Controller
{
    // Mostrar todos los textos
    public function index()
    {
        $texts = TextHome::all();
        return view('texts.index', compact('texts'));
    }
    // Mostrar el formulario para crear un nuevo texto
    public function create()
    {
        return view('texts.create');
    }
    // Guardar un nuevo texto en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'string',
            'content' => 'required|string|max:1500',
            'others' => 'string',
        ]);

        TextHome::create($request->all());
        return redirect()->route('texts.index')->with('success', 'Texto creado exitosamente.');
    }
    // Mostrar el formulario para editar un texto específico
    public function edit($id)
    {
        $text = TextHome::findOrFail($id);
        return view('texts.edit', compact('text'));
    }
    // Actualizar un texto específico en la base de datos
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'string',
            'content' => 'required|string',
            'others' => 'string',
        ]);

        $text = TextHome::findOrFail($id)->update($request->all());
        return redirect()->route('texts.index')->with('success', 'Texto actualizado exitosamente.');
    }
    // Eliminar un texto
    public function destroy(string $id)
    {
        $text = TextHome::findOrFail($id)->delete();
        return redirect()->route('texts.index')->with('success', 'Texto eliminado exitosamente.');
    }
}
