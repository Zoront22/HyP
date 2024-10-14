@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Gestor de Imágenes</h2>

        @if (session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulario para subir una nueva imagen -->
        <form action="{{ route('images.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" required class="form-control">
            {{-- <input type="text" name="location" placeholder="Ubicación" required class="form-control"> --}}
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>

        <!--Mostrar Imagenes subidas-->
        <div class="row">
            @foreach ($images as $image)
                <div class="col-md-3">
                    <img src="{{ asset('storage/theme/' . str_replace('public/theme', '', $image->path)) }}"
                        class="img-thumbnail" alt="{{ $image->filename }}" width="150">
                    <p>Nombre: {{ $image->filename }}</p>
                    <p>Ubicación: {{ $image->location }}</p>

                    <!-- Formulario para actualizar la imagen -->
                    <form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data"
                        style="display:inline;">
                        @csrf
                        <div class="form-group mt-2">
                            <input type="file" name="image" required class="form-control">
                            {{-- <input type="text" name="location" value="{{ $image->location }}" required class="form-control"> --}}
                        </div>
                        <button type="submit" class="btn btn-warning mt-1">Actualizar</button>
                    </form>

                    <!-- Botón de eliminar -->
                    <form action="{{ route('images.destroy', $image->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-1"
                            onclick="return confirm('¿Estás seguro de que deseas eliminar esta imagen?')">Eliminar</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
