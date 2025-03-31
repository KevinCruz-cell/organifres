<?php

use Illuminate\Support\Facades\Route;

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
    return view("Ejemplo_6");
});

Route::get("tablas",function(){
    return view("tablas");
});


Route::get('/', function () {
    return view('welcome'); // La vista principal
});



use App\Http\Controllers\ProductController;

Route::get('/tienda', [ProductController::class, 'tienda'])->name('tienda');



// Ruta para mostrar el formulario de registro
Route::get('/registro', function () {
    return view('registro');  // Asegúrate de que el archivo 'registro.blade.php' esté en resources/views/
});

// Ruta para procesar el registro (si deseas guardarlo)
Route::post('/registro', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('registro');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
