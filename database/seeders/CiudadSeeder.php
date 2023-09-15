<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
{
    public function run()
    {
        // Define los datos que deseas insertar.
        $data = [
            [
                'idCiudad' => '05001',
                'ciudad' => 'Medellín',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '11001',
                'ciudad' => 'Bogotá, D.C.',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '08001',
                'ciudad' => 'Barranquilla',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '54001',
                'ciudad' => 'Cúcuta',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '44001',
                'ciudad' => 'Riohacha',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '88001',
                'ciudad' => 'San Andrés',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '00624',
                'ciudad' => 'Guinea Bissau',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '76001',
                'ciudad' => 'Cali',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '20001',
                'ciudad' => 'Valledupar',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '00643',
                'ciudad' => 'Rusia',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '66001',
                'ciudad' => 'Pereira',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '00414',
                'ciudad' => 'Kuwait',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '63001',
                'ciudad' => 'Armenia',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '68013',
                'ciudad' => 'Aguada',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '91001',
                'ciudad' => 'Leticia',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '85001',
                'ciudad' => 'Yopal',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '95001',
                'ciudad' => 'San José del Guaviare',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '00004',
                'ciudad' => 'Afganistán',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '41013',
                'ciudad' => 'Agrado',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '27006',
                'ciudad' => 'Acandí',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '54003',
                'ciudad' => 'Abrego',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '52210',
                'ciudad' => 'Contadero',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '00170',
                'ciudad' => 'Colombia',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '05360',
                'ciudad' => 'Itagui',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '05002',
                'ciudad' => 'Abejorral',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '05004',
                'ciudad' => 'Abriaquí',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
            [
                'idCiudad' => '25019',
                'ciudad' => 'Albán',
                'estado' => true,
                'fechaCreacion' => now(),
            ],
        ];

        // Utiliza el método "insert" de la clase DB para insertar los datos en la tabla.
        DB::table('ciudad')->insert($data);
    }
}
