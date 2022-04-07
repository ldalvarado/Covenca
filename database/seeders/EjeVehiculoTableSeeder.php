<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EjeVehiculoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('eje_vehiculo')->delete();
        
        \DB::table('eje_vehiculo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => '1 eje',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => '2 ejes',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => '3 ejes',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
        ));
        
        
    }
}