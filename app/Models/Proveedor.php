<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';
    protected $primaryKey = 'Id_proveedor';
    public $timestamps = false;

    // 👇 Aquí defines qué campos pueden ser asignados en masa
    protected $fillable = [
        'Id_persona',  // Asegúrate de incluir todos los campos necesarios
        // 'otro_campo', 'otro_campo2', etc.
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'Id_persona', 'Id_persona');
    }
}
