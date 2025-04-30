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
                            <a class="nav-link text-white active" href="{{ route('productos') }}">📦 Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('proveedores') }}">🛒 Proveedores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('clientes.index') }}">👥 Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('categorias.index') }}">📂Categorias</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido Principal -->
            <main class="col-md-10 ms-sm-auto px-md-4 bg-light">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 text-dark">📦 Gestión de Productos</h1>
                    <div class="mb-3">
                        <a href="{{ route('productos.create') }}" class="btn btn-success font-weight-bold">➕ Agregar Producto</a>
                    </div>

                </div>

                <!-- Tabla de Productos -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped">
                        <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>categoria</th>
                            <th>Acciones</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->Id_producto }}</td>
                                <td>{{ $producto->Nombre }}</td>
                                <td>{{ $producto->descripcion }}</td>
                                <td>${{ $producto->Precio }} MXN</td>
                                <td>{{ $producto->categoria->Nombre ?? 'Sin categoría' }}</td>
                                <td>
                                    <a href="{{ route('productos.edit', $producto->Id_producto) }}" class="btn btn-sm btn-info text-white font-weight-bold">✏️ Editar</a>
                                    <form action="{{ route('productos.destroy', $producto->Id_producto) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger font-weight-bold" onclick="return confirm('¿Seguro que deseas eliminar este producto?')">🗑️ Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
