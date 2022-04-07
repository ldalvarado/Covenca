<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DiagramaAreaDefectoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('diagrama_area_defecto')->delete();
        
        \DB::table('diagrama_area_defecto')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idTipoDiagrama' => 3,
                'codigo' => 'adCamara',
                'descripcion' => 'Area de la cámara de aire',
            'contenido' => '<img src="{{url(\'/ui/assets/images/camara_aire.jpg\')}}" class=img-fluid >',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-05-04 20:00:00',
                'updated_at' => '2021-05-04 20:00:00',
            ),
        ));
        
        
    }
}