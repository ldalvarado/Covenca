<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GuiaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('guia')->delete();
        
        \DB::table('guia')->insert(array (
            0 => 
            array (
                'id' => 1,
                'codigo' => 'C91-GT0001',
                'codigoSucursalOrigen' => 'C91',
                'codigoSucursalDestino' => 'C01',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 10:55:49',
                'updated_at' => '2022-01-24 11:27:06',
            ),
            1 => 
            array (
                'id' => 2,
                'codigo' => 'C91-GT0002',
                'codigoSucursalOrigen' => 'C91',
                'codigoSucursalDestino' => 'C01',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:52:25',
                'updated_at' => '2022-01-24 12:57:55',
            ),
            2 => 
            array (
                'id' => 3,
                'codigo' => 'C91-GT0003',
                'codigoSucursalOrigen' => 'C91',
                'codigoSucursalDestino' => 'C01',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:52:58',
                'updated_at' => '2022-01-24 12:57:41',
            ),
            3 => 
            array (
                'id' => 4,
                'codigo' => 'C91-GT0004',
                'codigoSucursalOrigen' => 'C91',
                'codigoSucursalDestino' => 'C01',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 15:36:30',
                'updated_at' => '2022-01-24 15:36:30',
            ),
        ));
        
        
    }
}