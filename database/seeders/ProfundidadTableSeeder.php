<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfundidadTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('profundidad')->delete();
        
        \DB::table('profundidad')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => '12.0',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => '2022-01-24 18:29:42',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => '12.5',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => '13.0',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'descripcion' => '14.0',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'descripcion' => '14.5',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'descripcion' => '15.0',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'descripcion' => '16.0',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'descripcion' => '16.5',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'descripcion' => '17.0',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'descripcion' => '17.5',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'descripcion' => '18.0',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'descripcion' => '19.0',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'descripcion' => '20.0',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'descripcion' => '21.0',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'descripcion' => '22.0',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}