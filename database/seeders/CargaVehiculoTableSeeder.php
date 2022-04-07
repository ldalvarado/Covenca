<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CargaVehiculoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carga_vehiculo')->delete();
        
        \DB::table('carga_vehiculo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => '5000 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => '7500 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => '10000 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            3 => 
            array (
                'id' => 4,
                'descripcion' => '12500 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            4 => 
            array (
                'id' => 5,
                'descripcion' => '15000 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            5 => 
            array (
                'id' => 6,
                'descripcion' => '17500 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            6 => 
            array (
                'id' => 7,
                'descripcion' => '20000 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            7 => 
            array (
                'id' => 8,
                'descripcion' => '22500 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            8 => 
            array (
                'id' => 9,
                'descripcion' => '25000 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            9 => 
            array (
                'id' => 10,
                'descripcion' => '27500 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            10 => 
            array (
                'id' => 11,
                'descripcion' => '30000 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            11 => 
            array (
                'id' => 12,
                'descripcion' => '32500 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            12 => 
            array (
                'id' => 13,
                'descripcion' => '35000 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            13 => 
            array (
                'id' => 14,
                'descripcion' => '37500 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            14 => 
            array (
                'id' => 15,
                'descripcion' => '40000 KG',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
        ));
        
        
    }
}