<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoVehiculoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipo_vehiculo')->delete();
        
        \DB::table('tipo_vehiculo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idEje' => 3,
                'descripcion' => 'Bus',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            1 => 
            array (
                'id' => 2,
                'idEje' => 2,
                'descripcion' => 'Chuto',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            2 => 
            array (
                'id' => 4,
                'idEje' => 2,
                'descripcion' => 'Camión',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            3 => 
            array (
                'id' => 6,
                'idEje' => 2,
                'descripcion' => 'Camión Cisterna/Tanque',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            4 => 
            array (
                'id' => 8,
                'idEje' => 2,
                'descripcion' => 'Camión refrigerado',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            5 => 
            array (
                'id' => 10,
                'idEje' => 2,
                'descripcion' => 'Volqueta',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            6 => 
            array (
                'id' => 12,
                'idEje' => 2,
                'descripcion' => 'Batea',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            7 => 
            array (
                'id' => 14,
                'idEje' => 2,
                'descripcion' => 'Grua',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            8 => 
            array (
                'id' => 16,
                'idEje' => 2,
                'descripcion' => 'Cortinero',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            9 => 
            array (
                'id' => 19,
                'idEje' => 1,
                'descripcion' => 'Estacas\\/Jaulas',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            10 => 
            array (
                'id' => 22,
                'idEje' => 1,
                'descripcion' => 'Plataforma',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            11 => 
            array (
                'id' => 25,
                'idEje' => 1,
                'descripcion' => 'Tanque',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            12 => 
            array (
                'id' => 26,
                'idEje' => 2,
                'descripcion' => 'Tanque',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            13 => 
            array (
                'id' => 28,
                'idEje' => 2,
                'descripcion' => 'Cigüeña',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
        ));
        
        
    }
}