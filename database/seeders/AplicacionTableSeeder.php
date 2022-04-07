<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AplicacionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('aplicacion')->delete();
        
        \DB::table('aplicacion')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'Tracción',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'Toda Posición',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => 'Eje Libre',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}