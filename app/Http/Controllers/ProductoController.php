<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // Obtener todos los productos desde la base de datos
        $productos = Producto::all();

        // Pasar los productos a la vista 'productos'
        return view('productos.index', compact('productos'));
    }
}
