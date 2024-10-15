@extends('layouts.app')

@section('content')
    <h1>Crear Texto</h1>

    <form action="{{ route('texts.store') }}" method="POST">
        @csrf
        <label for="title" class="form-label">Título:</label>
        <input type="text" class="form-control form-control-lg input-group-text" name="title" required>
        <br>
        <label for="title" class="form-label">Subtitulo (Opcional):</label>
        <input type="text" class="form-control form-control-lg input-group-text" name="subtitle">
        <br>
        <label for="content" class="form-label">Contenido:</label>
        <textarea name="content" class="form-control form-control-lg" required aria-label="With textarea"></textarea>
        <br>
        <label for="content" class="form-label">Otros (opcional):</label>
        <textarea name="others" class="form-control form-control-lg" aria-label="With textarea"></textarea>
        <br>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('texts.index') }}" class="btn btn-warning">Volver</a>
    </form>
@endsection
