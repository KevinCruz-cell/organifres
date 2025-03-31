@extends("layouts.app")
@section("content")
<div class="container bg bg-kai text-center">

    <!-- Título "Bienvenido a OrganiFres" con Estilo Épico -->
    <div class="row mb-5">
        <div class="col-12">
            <h3 class="display-4 epic-welcome mb-3">Bienvenido a OrganiFres</h3>
            <p class="lead">
                OrganiFres es una plataforma innovadora que conecta productores locales con consumidores
                para llevar productos frescos directamente del campo a tu mesa. ¡Explora nuestros productos
                y disfruta de lo mejor de Valle de Bravo!
            </p>
        </div>
    </div>

    <!-- Sección de Galería de Imágenes -->
    <div class="row">
        <div class="col-4">
            <img src="{{ asset('img/jugo.png') }}" class="img-fluid rounded mb-3" alt="Imagen 1">
        </div>
        <div class="col-4">
            <img src="{{ asset('img/plato.png') }}" class="img-fluid rounded mb-3" alt="Imagen 2">
        </div>
        <div class="col-4">
            <img src="{{ asset('img/mora.png') }}" class="img-fluid rounded mb-3" alt="Imagen 3">
        </div>
    </div>

    <!-- Sección de Información Adicional -->
    <div class="row mt-5">
        <div class="col-12">
            <h4 class="mb-4">¿Por qué elegirnos?</h4>
            <ul class="list-group">
                <li class="list-group-item">Productos 100% frescos y naturales</li>
                <li class="list-group-item">Apoyo a los productores locales</li>
                <li class="list-group-item">Entrega rápida y segura</li>
                <li class="list-group-item">Variedad en productos orgánicos</li>
            </ul>
        </div>
    </div>

    <!-- Sección de Redes Sociales con Imágenes -->
    <div class="row mt-5">
        <div class="col-12">
            <h4>Síguenos en nuestras redes sociales</h4>
            <div class="d-flex justify-content-center">
                <a href="https://www.facebook.com/OrganiFres" target="_blank" class="me-3">
                    <img src="{{ asset('img/face.png') }}" alt="Facebook" class="img-fluid" style="width: 60px; height: 60px;">
                </a>
                <a href="https://www.instagram.com/OrganiFres" target="_blank" class="me-3">
                    <img src="{{ asset('img/insta.png') }}" alt="Instagram" class="img-fluid" style="width: 60px; height: 60px;">
                </a>
                <a href="https://twitter.com/OrganiFres" target="_blank" class="me-3">
                    <img src="{{ asset('img/twitter.png') }}" alt="Twitter" class="img-fluid" style="width: 60px; height: 60px;">
                </a>
            </div>
        </div>
    </div>

    <!-- Botón para redirigir a la tienda -->
    <div class="row mt-5">
        <div class="col-12">
            <a href="{{ url('/tienda') }}" class="btn btn-primary">Explorar nuestra Tienda</a>
        </div>
    </div>

  <div class="row mt-5">
        <div class="col-12">
            <a href="{{ url('/registro') }}" class="btn btn-success">Registrarse</a>
        </div>
    </div>


</div>

@endsection
