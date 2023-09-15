<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesionSeeder extends Seeder
{
    public function run()
    {
        // Define los datos que deseas insertar.
        $data = [
            [
                'tipoProfesion' => 'Ingeniero de sistemas',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoProfesion' => 'Contador',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoProfesion' => 'Tecnico en archivo',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoProfesion' => 'Administrador de empresas',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoProfesion' => 'Prueba profesiones',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [   
                'tipoProfesion' => 'Auxiliar',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoProfesion' => 'Desde oficial',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
        ];

        // Utiliza el método "insert" de la clase DB para insertar los datos en la tabla.
        DB::table('tipoprofesion')->insert($data);
    }
}
