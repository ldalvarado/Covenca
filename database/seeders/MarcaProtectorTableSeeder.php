<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarcaProtectorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marca_protector')->delete();
        
        \DB::table('marca_protector')->insert(array (
            0 => 
            array (
                'id' => 218,
                'descripcion' => 'Covencaucho',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 15:55:09',
                'updated_at' => '2022-01-24 15:55:09',
            ),
        ));
        
        
    }
}