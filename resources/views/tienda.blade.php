@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Mejorado -->
        <nav class="col-md-2 d-none d-md-block bg-dark text-white sidebar vh-100 p-4">
            <div class="position-sticky">
                <h2 class="text-center my-3">🍏 ORGANIFRES</h2>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="{{route('dashboard')}}">📊 Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('productos')}}">📦 Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('proveedores')}}">🛒 Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('clientes.index')}}">👥 Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('categorias.index')}}">📈 Categoria</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Contenido Principal -->
        <main class="col-md-10 ms-sm-auto px-md-4 bg-light">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 text-dark">📊 Dashboard de Administración</h1>
            </div>

            <!-- Tarjetas Mejoradas con Efecto Brillante -->
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card bg-primary text-white shadow-lg">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ventas del Día</h5>
                            <p class="display-4 fw-bold">$3,500</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning text-white shadow-lg">
                        <div class="card-body text-center">
                            <h5 class="card-title">Órdenes en Proceso</h5>
                            <p class="display-4 fw-bold">12</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white shadow-lg">
                        <div class="card-body text-center">
                            <h5 class="card-title">Clientes Nuevos</h5>
                            <p class="display-4 fw-bold">5</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gráfico de Ventas con Estilo Mejorado -->
            <div class="mt-4">
                <h2 class="text-dark">📈 Resumen de Ventas</h2>
                <canvas id="salesChart" class="border shadow-lg p-2"></canvas>
            </div>

            <!-- Tabla de Productos Mejorada -->
            <h2 class="mt-4 text-dark">📦 Gestión de Productos</h2>
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped" id="productTable">
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
                        <tr>
                            <td>4</td>
                            <td><img src="{{ asset('img/jugo.png') }}" width="50" class="rounded-lg shadow-md"></td>
                            <td>Jugo Natural</td>
                            <td>Jugo de frutas frescas y naturales</td>
                            <td>$60 MXN</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info text-white font-weight-bold">✏️ Editar</a>
                                <a href="#" class="btn btn-sm btn-danger text-white font-weight-bold">🗑️ Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="{{ asset('img/jugom.jpg') }}" width="50" class="rounded-lg shadow-md"></td>
                            <td>Jugo de Mango</td>
                            <td>Jugo natural de mango fresco</td>
                            <td>$70 MXN</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info text-white font-weight-bold">✏️ Editar</a>
                                <a href="#" class="btn btn-sm btn-danger text-white font-weight-bold">🗑️ Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><img src="{{ asset('img/plato.png') }}" width="50" class="rounded-lg shadow-md"></td>
                            <td>Plato de Frutas</td>
                            <td>Delicioso plato con frutas frescas</td>
                            <td>$80 MXN</td>
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

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
            datasets: [{
                label: 'Ventas en USD',
                data: [3200, 2800, 3000, 3500, 3700, 4000, 4200],
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.4,
                fill: false,
                pointRadius: 5,
                pointBackgroundColor: 'rgb(75, 192, 192)',
                pointBorderColor: 'rgb(255, 255, 255)',
                pointBorderWidth: 3
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return '$' + tooltipItem.raw.toLocaleString() + ' USD';
                        }
                    }
                }
            }
        }
    });
</script>
@endsection
