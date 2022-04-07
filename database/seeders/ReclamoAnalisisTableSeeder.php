<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReclamoAnalisisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reclamo_analisis')->delete();
        
        \DB::table('reclamo_analisis')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idReclamo' => 1,
                'idRechazo' => 10,
                'profundidadActual' => 1,
                'porcentaje' => 5,
                'descripcion' => '1',
                'imagenFalla' => NULL,
                'idUsuario' => 1,
                'ajusteComercial' => 0,
                'activo' => 1,
                'created_at' => '2022-01-24 12:09:48',
                'updated_at' => '2022-01-24 12:09:48',
                'estado' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'idReclamo' => 4,
                'idRechazo' => 1,
                'profundidadActual' => 9,
                'porcentaje' => 75,
                'descripcion' => 'CAUCHO CON FILTRACION EN EL COSTADO',
                'imagenFalla' => NULL,
                'idUsuario' => 1,
                'ajusteComercial' => 0,
                'activo' => 1,
                'created_at' => '2022-01-24 13:05:29',
                'updated_at' => '2022-01-24 13:05:29',
                'estado' => 1,
            ),
        ));
        
        
    }
}