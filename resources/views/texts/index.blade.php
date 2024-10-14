@extends('layouts.app')

@section('content')
    <h1>Gestor de Textos</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('texts.create') }}">Crear Nuevo Texto</a>

    <table>
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
                        <a href="{{ route('texts.edit', $text) }}">Editar</a>
                        <form action="{{ route('texts.destroy', $text) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
