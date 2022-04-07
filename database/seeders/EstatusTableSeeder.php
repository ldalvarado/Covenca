<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estatus')->delete();
        
        \DB::table('estatus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'GENERADO',
                'cerrador' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'NO PROCESADO',
                'cerrador' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => 'ESPECIAL',
                'cerrador' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            3 => 
            array (
                'id' => 4,
                'descripcion' => 'APROBADO',
                'cerrador' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            4 => 
            array (
                'id' => 5,
                'descripcion' => 'NO APROBADO',
                'cerrador' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            5 => 
            array (
                'id' => 6,
                'descripcion' => 'AJUSTE COMERCIAL',
                'cerrador' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
        ));
        
        
    }
}