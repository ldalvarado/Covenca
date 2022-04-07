<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModeloVehiculoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modelo_vehiculo')->delete();
        
        \DB::table('modelo_vehiculo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idMarca' => 1,
                'descripcion' => 'Orinoco',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            1 => 
            array (
                'id' => 2,
                'idMarca' => 1,
                'descripcion' => 'X1',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            2 => 
            array (
                'id' => 3,
                'idMarca' => 2,
                'descripcion' => 'Aveo LS',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            3 => 
            array (
                'id' => 4,
                'idMarca' => 2,
                'descripcion' => 'Corsa',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            4 => 
            array (
                'id' => 5,
                'idMarca' => 6,
                'descripcion' => 'ENT 610',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-14 08:46:20',
                'updated_at' => '2022-01-14 08:46:20',
            ),
            5 => 
            array (
                'id' => 6,
                'idMarca' => 8,
                'descripcion' => '7000',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-27 15:57:46',
                'updated_at' => '2022-01-27 15:57:46',
            ),
        ));
        
        
    }
}