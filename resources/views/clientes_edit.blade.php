@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Editar Cliente</h2>

        <form action="{{ route('clientes.update', $cliente->Id_cliente) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="id_persona" class="form-label">Seleccionar Persona</label>
                <select name="id_persona" class="form-select" required>
                    <option value="">-- Selecciona una persona --</option>
                    @foreach($personas as $persona)
                        <option value="{{ $persona->Id_persona }}" {{ $cliente->id_persona == $persona->Id_persona ? 'selected' : '' }}>
                            {{ $persona->nombre_completo }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
