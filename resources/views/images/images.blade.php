@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Gestión de Imágenes</h2>

        <!-- Formulario para subir imagen -->
        <form action="{{ route('images.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Subir Imagen</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>

        <!-- Mostrar imágenes subidas -->
        <h3>Imágenes Subidas</h3>
        <div class="row">
            @foreach ($images as $image)
                <div class="col-md-3">
                    <img src="{{ Storage::url($image) }}" class="img-thumbnail" alt="Imagen">
                    <form action="{{ route('images.update', basename($image)) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-2">
                            <label for="image">Actualizar Imagen</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-warning mt-1">Actualizar</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
