<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Manzana',
                'descripcion' => 'Manzana Roja',
                'precio' => 10.5,
                'imagen' => 'manzana.jpg',
            ],
            [
                'nombre' => 'Banana',
                'descripcion' => 'Banana Ecuatoriana',
                'precio' => 8.0,
                'imagen' => 'banana.jpg',
            ],
        ]);
    }
}
