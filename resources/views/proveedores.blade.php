@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <!-- Botón Regresar a la Vista Principal -->
        <a href="{{ route('tienda') }}" class="btn btn-secondary mb-3">
            🏠 Regresar a la Vista Principal
        </a>

        <div class="card shadow-lg border-0">
            <div class="card-header bg-primary text-white text-center d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Lista de Proveedores</h2>
                <a href="{{ route('proveedores.create') }}" class="btn btn-success">Agregar Proveedor</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre del Proveedor</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($proveedores as $proveedor)
                        <tr>
                            <td>{{ $proveedor->Id_proveedor }}</td>
                            <td>
                                @if($proveedor->persona)
                                    {{ $proveedor->persona->nombre_completo }}
                                @else
                                    <span class="text-danger">No asignado</span>
                                @endif
                            </td>
                            <td>
                                {{-- Botón para eliminar --}}
                                <form action="{{ route('proveedores.destroy', $proveedor->Id_proveedor) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Deseas eliminar este proveedor?')">Eliminar</button>
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
