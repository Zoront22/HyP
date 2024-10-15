@extends('layouts.app')

@section('content')
    <h1>Editar Texto</h1>

    <form action="{{ route('contact.update', $text) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title" class="form-label">Título:</label>
        <input type="text" class="form-control form-control-lg input-group-text" name="title" required
            value="{{ $text->title }}">
        <br>
        <label for="title" class="form-label">Subtitulo (Opcional):</label>
        <input type="text" class="form-control form-control-lg input-group-text" name="subtitle"
            value="{{ $text->subtitle }}">
        <br>
        <label for="content" class="form-label">Contenido:</label>
        <textarea name="content" class="form-control form-control-lg" required aria-label="With textarea">{{ $text->content }}</textarea>
        <br>
        <label for="content" class="form-label">Otros (opcional):</label>
        <textarea name="others" class="form-control form-control-lg" aria-label="With textarea">{{ $text->others }}</textarea>
        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('contact.index') }}" class="btn btn-warning">Volver</a>
    </form>
@endsection
