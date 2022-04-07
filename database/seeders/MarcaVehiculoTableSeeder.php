<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarcaVehiculoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marca_vehiculo')->delete();
        
        \DB::table('marca_vehiculo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'Chery',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'Chevrolet',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => 'Chrysler',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            3 => 
            array (
                'id' => 4,
                'descripcion' => 'Dodge',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            4 => 
            array (
                'id' => 5,
                'descripcion' => 'Dongfeng',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            5 => 
            array (
                'id' => 6,
                'descripcion' => 'Encava',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            6 => 
            array (
                'id' => 7,
                'descripcion' => 'Fiat',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            7 => 
            array (
                'id' => 8,
                'descripcion' => 'Ford',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            8 => 
            array (
                'id' => 9,
                'descripcion' => 'Freightliner',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            9 => 
            array (
                'id' => 10,
                'descripcion' => 'Hino',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            10 => 
            array (
                'id' => 11,
                'descripcion' => 'Hyundai',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            11 => 
            array (
                'id' => 12,
                'descripcion' => 'International',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            12 => 
            array (
                'id' => 13,
                'descripcion' => 'Isuzu',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            13 => 
            array (
                'id' => 14,
                'descripcion' => 'Iveco',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            14 => 
            array (
                'id' => 15,
                'descripcion' => 'JAC',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            15 => 
            array (
                'id' => 16,
                'descripcion' => 'Jeep',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            16 => 
            array (
                'id' => 17,
                'descripcion' => 'Kamaz',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            17 => 
            array (
                'id' => 18,
                'descripcion' => 'Kenworth',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            18 => 
            array (
                'id' => 19,
                'descripcion' => 'Mack',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            19 => 
            array (
                'id' => 20,
                'descripcion' => 'Marcopolo',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            20 => 
            array (
                'id' => 21,
                'descripcion' => 'Mercedes Benz',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            21 => 
            array (
                'id' => 22,
                'descripcion' => 'Mitsubishi',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            22 => 
            array (
                'id' => 23,
                'descripcion' => 'Nissan',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            23 => 
            array (
                'id' => 24,
                'descripcion' => 'Renault',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            24 => 
            array (
                'id' => 25,
                'descripcion' => 'Scania',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            25 => 
            array (
                'id' => 26,
                'descripcion' => 'Toyota',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            26 => 
            array (
                'id' => 27,
                'descripcion' => 'Volkswagen',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            27 => 
            array (
                'id' => 28,
                'descripcion' => 'Volvo',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
        ));
        
        
    }
}