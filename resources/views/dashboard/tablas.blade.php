@extends("layouts.app")
@section("content")
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <title>Clasificaciones</title>
    <style>
        .row {
            display: flex;
            justify-content: space-between;
        }
        .row > .col {
            border: 1px solid #dee2e6;
            padding: 8px;
        }
        .row.header > .col {
            font-weight: bold;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="alert alert-primary text-center">Clasificaciones</h1>

        <!-- Header Row -->
        <div class="row header">
            <div class="col">Id_Clasificacion</div>
            <div class="col">nom_clasificacion</div>
        </div>

        <!-- Data Rows -->
        <div class="row">
            <div class="col">1</div>
            <div class="col">A</div>
        </div>

        <div class="row">
            <div class="col">2</div>
            <div class="col">B</div>
        </div>

        <div class="row">
            <div class="col">3</div>
            <div class="col">C</div>
        </div>

        <div class="row">
            <div class="col">4</div>
            <div class="col">B15</div>
        </div>

        <div class="row">
            <div class="col">5</div>
            <div class="col">B18</div>
        </div>
    </div>
</body>
</html>
b a

@endsection