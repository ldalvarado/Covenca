<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GuiaReclamoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('guia_reclamo')->delete();
        
        \DB::table('guia_reclamo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idReclamo' => 1,
                'idGuia' => 1,
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 10:55:49',
                'updated_at' => '2022-01-24 11:27:06',
            ),
            1 => 
            array (
                'id' => 2,
                'idReclamo' => 4,
                'idGuia' => 2,
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:52:25',
                'updated_at' => '2022-01-24 12:57:55',
            ),
            2 => 
            array (
                'id' => 3,
                'idReclamo' => 2,
                'idGuia' => 3,
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:52:58',
                'updated_at' => '2022-01-24 12:57:41',
            ),
            3 => 
            array (
                'id' => 4,
                'idReclamo' => 3,
                'idGuia' => 3,
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:52:58',
                'updated_at' => '2022-01-24 12:57:41',
            ),
            4 => 
            array (
                'id' => 5,
                'idReclamo' => 5,
                'idGuia' => 4,
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 15:36:30',
                'updated_at' => '2022-01-24 15:36:30',
            ),
            5 => 
            array (
                'id' => 6,
                'idReclamo' => 23,
                'idGuia' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}