<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    // Si el nombre de la tabla no sigue la convención pluralizada, especifica el nombre aquí
    protected $table = 'productos'; // Asegúrate de que sea 'productos', o el nombre correcto

    // Si no estás usando las columnas por defecto para el timestamp (created_at, updated_at),
    // también puedes desactivarlos con:
    public $timestamps = false;
   
}
