<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("Ejemplo_1",function(){
    return view("Ejemplo_1");
});

Route::get("Ejemplo_2",function(){
    return view("Ejemplo_2");
});

Route::get("Ejemplo_3",function(){
    return view("Ejemplo_3");
});

Route::get("Ejemplo_3",function(){
    return view("Ejemplo_4");
});

Route::get("Ejemplo_5",function(){
    return view("Ejemplo_5");
});

Route::get("Ejemplo_6",function(){
    return view("dashboard.Ejemplo_6");
});

Route::get('/productos',function(){
    return view('productos');
})->name('productos');

Route::get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');


Route::get("tablas",function(){
    return view("tablas");
});


Route::get('/', function () {
    return view('welcome'); // La vista principal
});



use App\Http\Controllers\ProductController;

Route::get('/tienda', [ProductController::class, 'tienda'])->name('tienda');

//Ruta Proveedores
use App\Http\Controllers\ProveedorController;

Route::get('/proveedores',[ProveedorController::class,'index'])->name('proveedores');
Route::get('/proveedores/create', [ProveedorController::class, 'create'])->name('proveedores.create');
Route::post('/proveedores', [ProveedorController::class, 'store'])->name('proveedores.store');
Route::delete('/proveedores/{proveedor}', [ProveedorController::class, 'destroy'])->name('proveedores.destroy');

//Ruta Clientes
use App\Http\Controllers\ClienteController;

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

//

// Ruta para mostrar el formulario de registro
Route::get('/registro', function () {
    return view('registro');  // Asegúrate de que el archivo 'registro.blade.php' esté en resources/views/
});

// Ruta para procesar el registro (si deseas guardarlo)
Route::post('/registro', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('registro');

//Ruta categorias
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
//Route::get('/categorias/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::resource('categorias', CategoriaController::class);

Route::get('/clientes/{id}/edit', [App\Http\Controllers\ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{id}', [App\Http\Controllers\ClienteController::class, 'update'])->name('clientes.update');
Route::get('/proveedores/{id}/edit', [ProveedorController::class, 'edit'])->name('proveedores.edit');
Route::put('/proveedores/{id}', [ProveedorController::class, 'update'])->name('proveedores.update');
Route::get('/productos', [ProductoController::class, 'index'])->name('productos');
Route::get('/productos/{id}/editar', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
