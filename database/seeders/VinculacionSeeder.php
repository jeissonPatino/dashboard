<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VinculacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define los datos que deseas insertar.
        $data = [
            [
                'tipoVinculacion' => 'Cliente',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoVinculacion' => 'Micro',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoVinculacion' => 'Accionista',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoVinculacion' => 'Proveedor',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoVinculacion' => 'Empleado',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoVinculacion' => 'Tipo de vinculacion',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            
        ];

        // Utiliza el método "insert" de la clase DB para insertar los datos en la tabla.
        DB::table('tipoVinculacion')->insert($data);
    }
}
