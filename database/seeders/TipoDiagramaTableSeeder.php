<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoDiagramaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipo_diagrama')->delete();
        
        \DB::table('tipo_diagrama')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idProducto' => 1,
                'descripcion' => 'Diagrama de renovado',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'idProducto' => 2,
                'descripcion' => 'Diagrama de caucho original',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2021-10-29 15:43:34',
                'updated_at' => '2021-10-29 15:43:34',
            ),
            2 => 
            array (
                'id' => 3,
                'idProducto' => 3,
                'descripcion' => 'Diagrama de cámara de aire',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2021-10-29 15:43:34',
                'updated_at' => '2021-10-29 15:43:34',
            ),
            3 => 
            array (
                'id' => 4,
                'idProducto' => 4,
                'descripcion' => 'Diagrama de caucho industrial',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2021-10-29 15:43:34',
                'updated_at' => '2021-10-29 15:43:34',
            ),
        ));
        
        
    }
}