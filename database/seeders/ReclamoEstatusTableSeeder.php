<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReclamoEstatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reclamo_estatus')->delete();
        
        \DB::table('reclamo_estatus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idReclamo' => 1,
                'idEstatus' => 1,
                'observacion' => 'procesado',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 10:33:27',
                'updated_at' => '2022-01-24 10:33:27',
            ),
            1 => 
            array (
                'id' => 2,
                'idReclamo' => 2,
                'idEstatus' => 1,
                'observacion' => 'procesado',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 11:46:24',
                'updated_at' => '2022-01-24 11:46:24',
            ),
            2 => 
            array (
                'id' => 3,
                'idReclamo' => 3,
                'idEstatus' => 1,
                'observacion' => 'procesado',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:08:24',
                'updated_at' => '2022-01-24 12:08:24',
            ),
            3 => 
            array (
                'id' => 4,
                'idReclamo' => 1,
                'idEstatus' => 4,
                'observacion' => 'La garantía ha sido aprobada',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 12:09:48',
                'updated_at' => '2022-01-24 12:09:48',
            ),
            4 => 
            array (
                'id' => 5,
                'idReclamo' => 4,
                'idEstatus' => 1,
                'observacion' => 'procesado',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:50:58',
                'updated_at' => '2022-01-24 12:50:58',
            ),
            5 => 
            array (
                'id' => 6,
                'idReclamo' => 4,
                'idEstatus' => 4,
                'observacion' => 'La garantía ha sido aprobada',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 13:06:43',
                'updated_at' => '2022-01-24 13:06:43',
            ),
            6 => 
            array (
                'id' => 7,
                'idReclamo' => 5,
                'idEstatus' => 1,
                'observacion' => 'procesado',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 15:35:25',
                'updated_at' => '2022-01-24 15:35:25',
            ),
            7 => 
            array (
                'id' => 8,
                'idReclamo' => 6,
                'idEstatus' => 1,
                'observacion' => 'procesado',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 17:19:47',
                'updated_at' => '2022-01-24 17:19:47',
            ),
            8 => 
            array (
                'id' => 9,
                'idReclamo' => 7,
                'idEstatus' => 1,
                'observacion' => 'procesado',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 17:26:35',
                'updated_at' => '2022-01-24 17:26:35',
            ),
            9 => 
            array (
                'id' => 10,
                'idReclamo' => 23,
                'idEstatus' => 1,
                'observacion' => 'procesado',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}