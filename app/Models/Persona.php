<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    // Especifica que la clave primaria no es 'id', sino 'Id_persona'
    protected $primaryKey = 'Id_persona';
    protected $table = 'personas';
    public $timestamps = false;

    // Definir la relación con el modelo Proveedor
    public function proveedores()
    {
        return $this->hasMany(Proveedor::class, 'Id_persona', 'Id_persona');
    }

    public function getNombreCompletoAttribute()
    {
        return "{$this->Nom} {$this->Ap} {$this->Am}";
    }

}
