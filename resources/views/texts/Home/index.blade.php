@extends('layouts.app')

@section('content')
    <h2>Gestor de Textos</h2>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('texts.create') }}" class="btn btn-primary ">Crear Nuevo Texto</a>

    <table class="table" style="margin: 100px, 100px, 100px, 100px">
        <thead>
            <tr>
                <th>Título</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($texts as $text)
                <tr>
                    <td>{{ $text->title }}</td>
                    <td>
                        <a href="{{ route('texts.edit', $text) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('texts.destroy', $text) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
