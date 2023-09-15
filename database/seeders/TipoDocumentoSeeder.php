<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocumentoSeeder extends Seeder
{
    public function run()
    {
        // Define los datos que deseas insertar.
        $data = [
            [
                'tipoDocumento' => 'cedula de ciudadania',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoDocumento' => 'cedula de extranjeria',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoDocumento' => 'NIT',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'tipoDocumento' => 'Pasaporte',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
        ];

        // Utiliza el método "insert" de la clase DB para insertar los datos en la tabla.
        DB::table('tipoDocumento')->insert($data);
    }
}
