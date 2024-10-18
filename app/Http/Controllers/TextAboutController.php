<?php

namespace App\Http\Controllers;

use App\Models\TextAbout;
use Illuminate\Http\Request;

class TextAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $texts = TextAbout::all();
        return view('texts.about.index', compact('texts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('texts.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'string',
            'content' => 'required|string|max:1500',
            'others' => 'string',
        ]);

        TextAbout::create($request->all());
        return redirect()->route('about.index')->with('success', 'Texto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $text = TextAbout::findOrFail($id);
        return view('texts.about.edit', compact('text'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'string',
            'content' => 'required|string',
            'others' => 'string',
        ]);

        $text = TextAbout::findOrFail($id)->update($request->all());
        return redirect()->route('about.index')->with('success', 'Texto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $text = TextAbout::findOrFail($id)->delete();
        return redirect()->route('about.index')->with('success', 'Texto eliminado exitosamente.');
    }
}
