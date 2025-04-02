@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-success text-white text-center">
                <h2>Agregar Categoria</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('categorias.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        textfield
                        <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Categoria</button>
                    <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
