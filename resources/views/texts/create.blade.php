@extends('layouts.app')

@section('content')
    <h1>Crear Texto</h1>

    <form action="{{ route('texts.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" required>
        <br>
        <label for="content">Contenido:</label>
        <textarea name="content" required></textarea>
        <br>
        <button type="submit">Crear</button>
    </form>

    <a href="{{ route('texts.index') }}">Volver</a>
@endsection
