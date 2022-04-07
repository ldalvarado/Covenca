<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedidaCauchoIndustrialTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('medida_caucho_industrial')->delete();
        
        \DB::table('medida_caucho_industrial')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nomeclatura' => 'medida prueba 1',
                'descripcion' => 'medida prueba 1',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 17,
                'created_at' => '2021-12-07 16:21:01',
                'updated_at' => '2021-12-07 16:21:01',
            ),
        ));
        
        
    }
}