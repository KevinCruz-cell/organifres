<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="Ejemplo_1" content="width=device-width, initial-scale=1">
	<title>Ejemplo_1</title>
</head>
<body>
	<div>
		<h1>Hola</h1>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Containers, Grid, Columns y Gutters</title>
    <!-- Enlazamos el CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- 1. Containers -->
    <div class="container">
        <!-- Contenedor estándar con ancho fijo según el tamaño de la pantalla -->
        <p>Contenido dentro de un container estándar.</p>
    </div>

    <div class="container-sm">
        <!-- Container para pantallas pequeñas (hasta sm) -->
        <p>Este container es 100% ancho hasta el tamaño pequeño (sm).</p>
    </div>

    <div class="container-md">
        <!-- Container para pantallas medianas (hasta md) -->
        <p>Este container es 100% ancho hasta el tamaño mediano (md).</p>
    </div>

    <div class="container-lg">
        <!-- Container para pantallas grandes (hasta lg) -->
        <p>Este container es 100% ancho hasta el tamaño grande (lg).</p>
    </div>

    <div class="container-xl">
        <!-- Container para pantallas extra grandes (hasta xl) -->
        <p>Este container es 100% ancho hasta el tamaño extra grande (xl).</p>
    </div>

    <div class="container-xxl">
        <!-- Container para pantallas extra extra grandes (hasta xxl) -->
        <p>Este container es 100% ancho hasta el tamaño extra extra grande (xxl).</p>
    </div>

    <div class="container-fluid">
        <!-- Container fluido que ocupa todo el ancho disponible en cualquier tamaño de pantalla -->
        <p>Este container ocupa el 100% del ancho disponible, sin importar el tamaño de la pantalla.</p>
    </div>

    <!-- 2. Grid -->
    <div class="container">
        <div class="row">
            <!-- Fila que contiene columnas -->
            <div class="col">
                <!-- Columna 1 -->
                <p>Columna 1</p>
            </div>
            <div class="col">
                <!-- Columna 2 -->
                <p>Columna 2</p>
            </div>
            <div class="col">
                <!-- Columna 3 -->
                <p>Columna 3</p>
            </div>
        </div>
    </div>

    <!-- 3. Columns -->
    <div class="container">
        <div class="row align-items-start">
            <!-- Fila con columnas alineadas al inicio -->
            <div class="col">
                <p>Una de las tres columnas (Alineadas al inicio)</p>
            </div>
            <div class="col">
                <p>Una de las tres columnas (Alineadas al inicio)</p>
            </div>
            <div class="col">
                <p>Una de las tres columnas (Alineadas al inicio)</p>
            </div>
        </div>
        <div class="row align-items-center">
            <!-- Fila con columnas alineadas al centro -->
            <div class="col">
                <p>Una de las tres columnas (Alineadas al centro)</p>
            </div>
            <div class="col">
                <p>Una de las tres columnas (Alineadas al centro)</p>
            </div>
            <div class="col">
                <p>Una de las tres columnas (Alineadas al centro)</p>
            </div>
        </div>
        <div class="row align-items-end">
            <!-- Fila con columnas alineadas al final -->
            <div class="col">
                <p>Una de las tres columnas (Alineadas al final)</p>
            </div>
            <div class="col">
                <p>Una de las tres columnas (Alineadas al final)</p>
            </div>
            <div class="col">
                <p>Una de las tres columnas (Alineadas al final)</p>
            </div>
        </div>
    </div>

    <!-- 4. Gutters -->
    <div class="container px-4">
        <!-- px-4: Agrega padding horizontal -->
        <div class="row gx-5">
            <!-- gx-5: Agrega espacio entre las columnas (gutter horizontal) -->
            <div class="col">
                <div class="p-3 border bg-light">
                    <!-- Columna con padding personalizado -->
                    Custom column padding
                </div>
            </div>
            <div class="col">
                <div class="p-3 border bg-light">
                    <!-- Otra columna con padding personalizado -->
                    Custom column padding
                </div>
            </div>
        </div>
    </div>

    <!-- Agregamos el JS de Bootstrap al final del cuerpo del documento -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
a
</body>
</html>