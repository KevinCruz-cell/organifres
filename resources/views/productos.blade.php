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
                </div>

                <!-- Tabla de Productos -->
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped">
                        <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="{{ asset('img/Emanzana.jpg') }}" width="50" class="rounded-lg shadow-md"></td>
                            <td>Manzana</td>
                            <td>Manzana fresca y deliciosa</td>
                            <td>$50 MXN</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info text-white font-weight-bold">✏️ Editar</a>
                                <a href="#" class="btn btn-sm btn-danger text-white font-weight-bold">🗑️ Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="{{ asset('img/Epepin.jpg') }}" width="50" class="rounded-lg shadow-md"></td>
                            <td>Pepino</td>
                            <td>Pepino fresco y crujiente</td>
                            <td>$30 MXN</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info text-white font-weight-bold">✏️ Editar</a>
                                <a href="#" class="btn btn-sm btn-danger text-white font-weight-bold">🗑️ Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="{{ asset('img/Epepino.jpg') }}" width="50" class="rounded-lg shadow-md"></td>
                            <td>Epepino</td>
                            <td>Una variedad especial de pepino</td>
                            <td>$40 MXN</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info text-white font-weight-bold">✏️ Editar</a>
                                <a href="#" class="btn btn-sm btn-danger text-white font-weight-bold">🗑️ Eliminar</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
