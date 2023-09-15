<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    public function run()
    {
        // Define los datos que deseas insertar.
        $data = [
            [
                'genero' => 'Masculino',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'genero' => 'Femenino',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'genero' => 'Otro',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            
        ];

        // Utiliza el método "insert" de la clase DB para insertar los datos en la tabla.
        DB::table('Genero')->insert($data);
    }
}
