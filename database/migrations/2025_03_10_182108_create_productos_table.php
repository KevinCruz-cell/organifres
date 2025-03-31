<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // campo ID
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio', 8, 2); // Precio con dos decimales
            $table->string('imagen')->nullable(); // Ruta a la imagen
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
