<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarcaCauchoIndustrialTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('marca_caucho_industrial')->delete();
        
        \DB::table('marca_caucho_industrial')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'protector 2',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 17,
                'created_at' => '2021-12-07 16:06:14',
                'updated_at' => '2021-12-07 16:06:14',
            ),
        ));
        
        
    }
}