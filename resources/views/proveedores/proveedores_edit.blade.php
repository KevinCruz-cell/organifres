@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Editar Proveedor</h2>

        <form action="{{ route('proveedores.update', $proveedor->Id_proveedor) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="Id_persona" class="form-label">Persona Asociada:</label>
                <select name="Id_persona" id="Id_persona" class="form-select" required>
                    <option value="">-- Selecciona una persona --</option>
                    @foreach($personas as $persona)
                        <option value="{{ $persona->Id_persona }}" {{ $persona->Id_persona == $proveedor->Id_persona ? 'selected' : '' }}>
                            {{ $persona->nombre_completo }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('proveedores') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
