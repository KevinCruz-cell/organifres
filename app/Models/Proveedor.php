<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';
    protected $primaryKey = 'Id_proveedor';
    public $timestamps = false; // Si tu tabla no tiene created_at y updated_at


    public function persona()
    {
        // Esta relación debe devolver el modelo Persona y debe coincidir con la clave foránea
        return $this->belongsTo(Persona::class, 'Id_persona','Id_persona'); // Asegúrate de que 'Id_persona' sea el campo correcto
    }
}
