@extends('layouts.app')

@section('content')
    <h1>Editar Texto</h1>

    <form action="{{ route('texts.update', $text) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title" class="form-label">Título:</label>
        <input type="text" class="form-control form-control-lg input-group-text" name="title" value="{{ $text->title }}"
            required>
        <br>
        <label for="content" class="form-label">Contenido:</label>
        <textarea name="content" class="form-control form-control-lg" required>{{ $text->content }}</textarea>
        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('texts.index') }}" class="btn btn-warning">Volver</a>
    </form>
@endsection
