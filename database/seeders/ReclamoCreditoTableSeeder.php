<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReclamoCreditoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reclamo_credito')->delete();
        
        \DB::table('reclamo_credito')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idReclamo' => 4,
                'codigo' => '522/74501',
                'codigoControl' => NULL,
                'montoPagar' => '176.76',
                'precioVenta' => 235.68,
                'porcentaje' => 75,
                'idUsuario' => 1,
                'activo' => 1,
                'estado' => 1,
                'created_at' => '2022-01-27 13:04:08',
                'updated_at' => '2022-01-27 13:04:08',
            ),
        ));
        
        
    }
}