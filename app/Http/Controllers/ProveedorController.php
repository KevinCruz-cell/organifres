<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Models\Persona;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::with('persona')->get();
        return view('proveedores', compact('proveedores'));
    }


    // Mostrar el formulario para agregar un nuevo proveedor
    public function create()
    {
        // Opcional: Puedes enviar la lista de personas para seleccionar una asociada
        $personas = Persona::all();
        return view('proveedores_create', compact('personas'));
    }
    // Mostrar el formulario para editar un proveedor
    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $personas = Persona::all();
        return view('proveedores_edit', compact('proveedor', 'personas'));
    }

// Actualizar el proveedor en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'Id_persona' => 'required|exists:personas,Id_persona'
        ]);

        $proveedor = Proveedor::findOrFail($id);
        $proveedor->Id_persona = $request->Id_persona;
        $proveedor->save();

        return redirect()->route('proveedores')->with('success', 'Proveedor actualizado correctamente');
    }


    // Guardar el proveedor en la base de datos
    public function store(Request $request)
    {
        // Validación básica
        $request->validate([
            'Id_persona' => 'required|exists:personas,Id_persona'
        ]);

        // Crear el proveedor
        Proveedor::create([
            'Id_persona' => $request->Id_persona
        ]);

        return redirect()->route('proveedores')->with('success', 'Proveedor agregado correctamente');
    }

    // Eliminar un proveedor
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedores')->with('success', 'Proveedor eliminado correctamente');
    }
}
