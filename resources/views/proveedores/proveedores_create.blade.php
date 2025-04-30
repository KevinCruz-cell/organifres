@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-success text-white text-center">
                <h2>Agregar Proveedor</h2>
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

                <form action="{{ route('proveedores.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Id_persona" class="form-label">Seleccione la Persona Asociada</label>
                        <select name="Id_persona" id="Id_persona" class="form-select">
                            <option value="">-- Seleccione una persona --</option>
                            @foreach($personas as $persona)
                                <option value="{{ $persona->Id_persona }}">
                                    {{ $persona->nombre_completo }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Proveedor</button>
                    <a href="{{ route('proveedores') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
