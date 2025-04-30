<?php

namespace App\Http\Controllers;

use App\Models\Producto; // Asegúrate de tener esto importado
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function tienda()
{
    $productos = Producto::all(); // Obtener todos los productos
    // dd($productos); // Comenta o elimina esta línea
    return view('dashboard.tienda', compact('productos')); // Enviar los productos a la vista
}
}
