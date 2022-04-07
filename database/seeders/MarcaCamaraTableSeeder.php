<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarcaCamaraTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marca_camara')->delete();
        
        \DB::table('marca_camara')->insert(array (
            0 => 
            array (
                'id' => 218,
                'descripcion' => 'Covencaucho',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-12-10 09:58:37',
                'updated_at' => '2021-12-10 09:58:37',
            ),
        ));
        
        
    }
}