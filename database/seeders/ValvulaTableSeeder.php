<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ValvulaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('valvula')->delete();
        
        \DB::table('valvula')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'TR-78',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 16:03:05',
                'updated_at' => '2022-01-24 16:03:05',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'TR-175',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 16:03:45',
                'updated_at' => '2022-01-24 16:03:45',
            ),
        ));
        
        
    }
}