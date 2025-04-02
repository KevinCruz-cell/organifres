@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <!-- Botón Regresar a la Vista Principal -->
        <a href="{{ route('tienda') }}" class="btn btn-secondary mb-3">
            🏠 Regresar a la Vista Principal
        </a>

        <div class="card shadow-lg border-0">
            <div class="card-header bg-primary text-white text-center d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Lista de Clientes</h2>
                <a href="{{ route('clientes.create') }}" class="btn btn-success">Agregar Cliente</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre del Cliente</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>
                                @if($cliente->persona)
                                    {{ $cliente->persona->nombre_completo }}
                                @else
                                    <span class="text-danger">No asignado</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('clientes.destroy', $cliente->Id_cliente) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Deseas eliminar este cliente?')">Eliminar</button>
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
