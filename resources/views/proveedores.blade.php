@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-dark text-white sidebar vh-100 p-4">
                <div class="position-sticky">
                    <h2 class="text-center my-3">🍏 ORGANIFRES</h2>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('dashboard') }}">📊 Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('productos') }}">📦 Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="{{ route('proveedores') }}">🛒 Proveedores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('clientes.index') }}">👥 Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('categorias.index') }}">📂 Categorias</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido principal -->
            <main class="col-md-10 ms-sm-auto px-4">
                <div class="container mt-4">
                    <!-- Botón Regresar a la Vista Principal -->
                    <a href="{{ route('tienda') }}" class="btn btn-secondary mb-3">
                        🏠 Regresar
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
                                            <a href="{{ route('proveedores.edit', $proveedor->Id_proveedor) }}" class="btn btn-warning btn-sm">Editar</a>

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
            </main>
        </div>
    </div>
@endsection
