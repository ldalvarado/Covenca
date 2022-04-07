<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoTerrenoVehiculoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipo_terreno_vehiculo')->delete();
        
        \DB::table('tipo_terreno_vehiculo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'Larga distancia - Autopista',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'Media distancia - Regional',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => 'Urbano - Avenidas, calles',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            3 => 
            array (
                'id' => 4,
                'descripcion' => 'Mixto - On/Off Road',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            4 => 
            array (
                'id' => 5,
                'descripcion' => 'Fuera de carretera - Off Road',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
        ));
        
        
    }
}