@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Editar Producto</h2>

        <form action="{{ route('productos.update', $producto->Id_producto) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" name="Nombre" class="form-control" value="{{ $producto->Nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" rows="3">{{ $producto->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label for="Precio" class="form-label">Precio</label>
                <input type="number" name="Precio" class="form-control" value="{{ $producto->Precio }}" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="Id_categoria" class="form-label">Categoría</label>
                <select name="Id_categoria" class="form-select" required>
                    <option value="">-- Selecciona una categoría --</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->Id_categoria }}" {{ $producto->Id_categoria == $categoria->Id_categoria ? 'selected' : '' }}>
                            {{ $categoria->Nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('productos') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
