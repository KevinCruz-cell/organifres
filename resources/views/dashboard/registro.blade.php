<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo de la barra de navegación */
        .navbar {
            background-color: #AACCAA;
        }

        .navbar-brand {
            color: black;
            font-weight: bold;
        }

        /* Estilo para las columnas */
        .left-column {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .right-column {
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        /* Estilo para el formulario */
        .form-container {
            width: 100%;
            max-width: 400px;
        }

        .form-container input {
            margin-bottom: 15px;
        }

        /* Imagen y estilo */
        .image {
            width: 80%;
            max-width: 400px;
            border-radius: 10px;
        }

        .welcome-text {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">ORGANIFRES</a>
        </div>
    </nav>

    <!-- Contenedor de las dos columnas -->
    <div class="container-fluid">
        <div class="row min-vh-100">
            <!-- Columna izquierda con imagen -->
            <div class="col-12 col-md-6 left-column">
                <img src="{{ asset('img/registro.png') }}" alt="Imagen de bienvenida" class="image">
            </div>

            <!-- Columna derecha con formulario -->
            <div class="col-12 col-md-6 right-column">
                <div class="form-container">
                    <h2 class="welcome-text">HOLA BIENVENIDO A ORGANIFRES :)</h2>
                    <p class="text-center">Por favor, regístrate para continuar </p>
                    <!-- Formulario de registro -->
                    <form action="{{ url('/registro') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="nombre" placeholder="*nombre" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" placeholder="*correo" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" placeholder="*contraseña" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">REGISTRAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluir JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

