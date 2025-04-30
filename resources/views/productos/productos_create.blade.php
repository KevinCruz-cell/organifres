@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">➕ Agregar Nuevo Producto</h2>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
            </div>
            <div class="mb-3">
                <label for="Precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="Precio" name="Precio" min="0" required>
            </div>
            <div class="mb-3">
                <label for="Id_categoria" class="form-label">Categoría</label>
                <select class="form-select" id="Id_categoria" name="Id_categoria" required>
                    <option value="" disabled>Selecciona una categoría</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->Id_categoria }}">{{ $categoria->Nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Producto</button>
            <a href="{{ route('productos') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
