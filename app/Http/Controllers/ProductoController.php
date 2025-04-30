<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // Obtener todos los productos desde la base de datos
        $productos = Producto::all();

        // Pasar los productos a la vista 'productos'
        return view('productos.productos', compact('productos'));
    }
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = \App\Models\Categoria::all();
        return view('productos.productos_edit', compact('producto', 'categorias'));
    }
    public function update(Request $request, $id)
    {
        // Validar los campos
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'Precio' => 'required|numeric|min:0',
            'Id_categoria' => 'required|exists:categorias,Id_categoria',
        ]);

        // Buscar el producto
        $producto = Producto::findOrFail($id);

        // Actualizar los campos
        $producto->Nombre = $request->Nombre;
        $producto->descripcion = $request->descripcion;
        $producto->Precio = $request->Precio;
        $producto->Id_categoria = $request->Id_categoria;

        // Guardar los cambios
        $producto->save();

        // Redirigir con mensaje de éxito
        return redirect()->route('productos')->with('success', 'Producto actualizado correctamente.');
    }
    public function create()
    {
        $categorias = \App\Models\Categoria::all();
        return view('productos.productos_create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'Precio' => 'required|numeric|min:0',
            'Id_categoria' => 'required|exists:categorias,Id_categoria',
        ]);

        Producto::create([
            'Nombre' => $request->Nombre,
            'descripcion' => $request->descripcion,
            'Precio' => $request->Precio,
            'Id_categoria' => $request->Id_categoria,
        ]);

        return redirect()->route('productos')->with('success', 'Producto agregado correctamente.');
    }


    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos')->with('success', 'Productoa eliminado correctamente');
    }

}
