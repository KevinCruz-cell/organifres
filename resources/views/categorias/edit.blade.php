@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary mb-3">⬅️ Regresar</a>

        <div class="card">
            <div class="card-header bg-warning text-white">
                <h3 class="mb-0">Editar Categoría</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('categorias.update', $categoria->Id_categoria) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre de la Categoría</label>
                        <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ old('Nombre', $categoria->Nombre) }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
