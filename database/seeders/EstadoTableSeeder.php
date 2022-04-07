<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estado')->delete();
        
        \DB::table('estado')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'Pendiente por guía',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'Espera de aprobación',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => 'En tránsito',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            3 => 
            array (
                'id' => 4,
                'descripcion' => 'Espera por análisis técnico',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            4 => 
            array (
                'id' => 5,
                'descripcion' => 'Espera por crédito',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
            5 => 
            array (
                'id' => 6,
                'descripcion' => 'Cerrado',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2021-10-26 17:44:24',
                'updated_at' => '2021-10-26 17:44:24',
            ),
        ));
        
        
    }
}