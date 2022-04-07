<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('producto')->delete();
        
        \DB::table('producto')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'Caucho renovado',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'Caucho Original',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => 'Cámara de aire',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'descripcion' => 'Cauchos Industriales',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'descripcion' => 'Protectores',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}