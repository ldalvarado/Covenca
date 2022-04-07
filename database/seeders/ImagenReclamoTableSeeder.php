<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagenReclamoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('imagen_reclamo')->delete();
        
        \DB::table('imagen_reclamo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idReclamo' => 1,
                'urlImagen' => '/img/cauchopro.jpg',
                'descripcionImagen' => 'phptp',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 10:33:27',
                'updated_at' => '2022-01-24 10:33:27',
                'imagen64' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'idReclamo' => 2,
                'urlImagen' => '/img/Captura.PNG',
                'descripcionImagen' => 'phptp',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 11:46:24',
                'updated_at' => '2022-01-24 11:46:24',
                'imagen64' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'idReclamo' => 1,
                'urlImagen' => '/img/db.jpg',
                'descripcionImagen' => '1',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 12:09:48',
                'updated_at' => '2022-01-24 12:09:48',
                'imagen64' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'idReclamo' => 4,
                'urlImagen' => '/img/Captura.PNG',
                'descripcionImagen' => 'phptp',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:50:58',
                'updated_at' => '2022-01-24 12:50:58',
                'imagen64' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'idReclamo' => 4,
                'urlImagen' => '/img/20211112_110021.jpg',
                'descripcionImagen' => 'CAUCHO CON FILTRACION EN EL COSTADO',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 13:05:28',
                'updated_at' => '2022-01-24 13:05:28',
                'imagen64' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'idReclamo' => 5,
                'urlImagen' => '/img/Captura.PNG',
                'descripcionImagen' => 'phptp',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 15:35:25',
                'updated_at' => '2022-01-24 15:35:25',
                'imagen64' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'idReclamo' => 6,
                'urlImagen' => '/img/cauchopro.jpg',
                'descripcionImagen' => 'phptp',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 17:19:47',
                'updated_at' => '2022-01-24 17:19:47',
                'imagen64' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'idReclamo' => 7,
                'urlImagen' => '/img/cauchopro.jpg',
                'descripcionImagen' => 'phptp',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 17:26:35',
                'updated_at' => '2022-01-24 17:26:35',
                'imagen64' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'idReclamo' => 23,
                'urlImagen' => '/img/cauchopro.jpg',
                'descripcionImagen' => 'phptp',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'imagen64' => '',
            ),
        ));
        
        
    }
}