<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $primaryKey = 'Id_categoria';
    protected $fillable = ['Nombre'];
    public $timestamps = false; // Si tu tabla no tiene created_at y updated_at
    //
}
