<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'productos';
    protected $primaryKey = 'Id_producto';
    //public $timestamps = true; // Porque tienes `created_at` y `updated_at`

    protected $fillable = [
        'Id_categoria',
        'Precio',
        'Nombre',
        'descripcion',
    ];

    // Relación con la tabla categorias
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'Id_categoria');
    }

    // Si el nombre de la tabla no sigue la convención pluralizada, especifica el nombre aquí
    //protected $table = 'productos'; // Asegúrate de que sea 'productos', o el nombre correcto

    // Si no estás usando las columnas por defecto para el timestamp (created_at, updated_at),
    // también puedes desactivarlos con:
    //public $timestamps = false;

}
