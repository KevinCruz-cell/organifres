<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Persona;

class ClienteController extends Controller
{
    // Mostrar la lista de clientes
    public function index()
    {
        $clientes = Cliente::with('persona')->get();
        return view('clientes', compact('clientes'));
    }

    // Mostrar el formulario para agregar un nuevo cliente
    public function create()
    {
        // Traemos todas las personas para seleccionar una asociada
        $personas = Persona::all();
        return view('clientes_create', compact('personas'));
    }

    // Almacenar el cliente en la base de datos
    public function store(Request $request)
    {
        // Validamos que se seleccione una persona y que exista en la tabla personas
        $request->validate([
            'Id_persona' => 'required|exists:personas,Id_persona'
        ]);

        Cliente::create([
            'Id_persona' => $request->Id_persona
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente agregado correctamente');
    }

    // Eliminar un cliente
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente');
    }

}
