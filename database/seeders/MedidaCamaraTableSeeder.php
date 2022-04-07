<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedidaCamaraTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('medida_camara')->delete();
        
        \DB::table('medida_camara')->insert(array (
            0 => 
            array (
                'id' => 3,
                'nomeclatura' => '',
                'descripcion' => '10.00R20',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 12:40:21',
                'updated_at' => '2022-01-24 12:40:21',
            ),
            1 => 
            array (
                'id' => 4,
                'nomeclatura' => '',
                'descripcion' => 'test',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 15:21:56',
                'updated_at' => '2022-01-24 15:21:56',
            ),
        ));
        
        
    }
}