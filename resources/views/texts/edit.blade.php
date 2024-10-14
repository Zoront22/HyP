@extends('layouts.app')

@section('content')
    <h1>Editar Texto</h1>

    <form action="{{ route('texts.update', $text) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Título:</label>
        <input type="text" name="title" value="{{ $text->title }}" required>
        <br>
        <label for="content">Contenido:</label>
        <textarea name="content" required>{{ $text->content }}</textarea>
        <br>
        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('texts.index') }}">Volver</a>
@endsection
