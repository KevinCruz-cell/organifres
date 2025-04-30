<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'clientes';  // Asegúrate que el nombre de la tabla es correcto
    protected $primaryKey = 'Id_cliente';
    //public $timestamps = false; // Si no usas created_at y updated_at

    protected $fillable = ['Id_persona'];

    // Relación con el modelo Persona
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'Id_persona', 'Id_persona');
    }
}
