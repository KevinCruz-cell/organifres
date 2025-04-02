@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <!-- Botón Regresar a la Vista Principal -->
        <a href="{{ route('tienda') }}" class="btn btn-secondary mb-3">
            🏠 Regresar a la Vista Principal
        </a>

        <div class="card shadow-lg border-0">
            <div class="card-header bg-primary text-white text-center d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Lista de Categorias</h2>
                <a href="{{ route('categorias.create') }}" class="btn btn-success">Agregar Categoria</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre de la Categoria</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <td>
                                    {{ $categoria->Id_categoria }}
                            </td>
                            <td>
                                    {{ $categoria->Nombre}}
                            </td>
                            <td>
                                <form action="{{ route('categorias.destroy', $categoria->Id_categoria) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Eliminar</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
