<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReclamoCondicionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reclamo_condicion')->delete();
        
        \DB::table('reclamo_condicion')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idCondicion' => 1,
                'idReclamo' => 1,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 10:33:27',
                'updated_at' => '2022-01-24 10:33:27',
            ),
            1 => 
            array (
                'id' => 2,
                'idCondicion' => 2,
                'idReclamo' => 1,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 10:33:27',
                'updated_at' => '2022-01-24 10:33:27',
            ),
            2 => 
            array (
                'id' => 3,
                'idCondicion' => 3,
                'idReclamo' => 1,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 10:33:27',
                'updated_at' => '2022-01-24 10:33:27',
            ),
            3 => 
            array (
                'id' => 4,
                'idCondicion' => 4,
                'idReclamo' => 1,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 10:33:27',
                'updated_at' => '2022-01-24 10:33:27',
            ),
            4 => 
            array (
                'id' => 5,
                'idCondicion' => 5,
                'idReclamo' => 1,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 10:33:27',
                'updated_at' => '2022-01-24 10:33:27',
            ),
            5 => 
            array (
                'id' => 6,
                'idCondicion' => 1,
                'idReclamo' => 2,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 11:46:24',
                'updated_at' => '2022-01-24 11:46:24',
            ),
            6 => 
            array (
                'id' => 7,
                'idCondicion' => 2,
                'idReclamo' => 2,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 11:46:24',
                'updated_at' => '2022-01-24 11:46:24',
            ),
            7 => 
            array (
                'id' => 8,
                'idCondicion' => 3,
                'idReclamo' => 2,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 11:46:24',
                'updated_at' => '2022-01-24 11:46:24',
            ),
            8 => 
            array (
                'id' => 9,
                'idCondicion' => 4,
                'idReclamo' => 2,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 11:46:24',
                'updated_at' => '2022-01-24 11:46:24',
            ),
            9 => 
            array (
                'id' => 10,
                'idCondicion' => 5,
                'idReclamo' => 2,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 11:46:24',
                'updated_at' => '2022-01-24 11:46:24',
            ),
            10 => 
            array (
                'id' => 11,
                'idCondicion' => 1,
                'idReclamo' => 3,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 12:08:24',
                'updated_at' => '2022-01-24 12:08:24',
            ),
            11 => 
            array (
                'id' => 12,
                'idCondicion' => 2,
                'idReclamo' => 3,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 12:08:24',
                'updated_at' => '2022-01-24 12:08:24',
            ),
            12 => 
            array (
                'id' => 13,
                'idCondicion' => 3,
                'idReclamo' => 3,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 12:08:24',
                'updated_at' => '2022-01-24 12:08:24',
            ),
            13 => 
            array (
                'id' => 14,
                'idCondicion' => 4,
                'idReclamo' => 3,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 12:08:24',
                'updated_at' => '2022-01-24 12:08:24',
            ),
            14 => 
            array (
                'id' => 15,
                'idCondicion' => 5,
                'idReclamo' => 3,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 12:08:24',
                'updated_at' => '2022-01-24 12:08:24',
            ),
            15 => 
            array (
                'id' => 16,
                'idCondicion' => 1,
                'idReclamo' => 1,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => '2022-01-24 12:09:48',
                'updated_at' => '2022-01-24 12:09:48',
            ),
            16 => 
            array (
                'id' => 17,
                'idCondicion' => 2,
                'idReclamo' => 1,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => '2022-01-24 12:09:48',
                'updated_at' => '2022-01-24 12:09:48',
            ),
            17 => 
            array (
                'id' => 18,
                'idCondicion' => 3,
                'idReclamo' => 1,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => '2022-01-24 12:09:48',
                'updated_at' => '2022-01-24 12:09:48',
            ),
            18 => 
            array (
                'id' => 19,
                'idCondicion' => 4,
                'idReclamo' => 1,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => '2022-01-24 12:09:48',
                'updated_at' => '2022-01-24 12:09:48',
            ),
            19 => 
            array (
                'id' => 20,
                'idCondicion' => 5,
                'idReclamo' => 1,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => '2022-01-24 12:09:48',
                'updated_at' => '2022-01-24 12:09:48',
            ),
            20 => 
            array (
                'id' => 21,
                'idCondicion' => 1,
                'idReclamo' => 4,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 12:50:58',
                'updated_at' => '2022-01-24 12:50:58',
            ),
            21 => 
            array (
                'id' => 22,
                'idCondicion' => 2,
                'idReclamo' => 4,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 12:50:58',
                'updated_at' => '2022-01-24 12:50:58',
            ),
            22 => 
            array (
                'id' => 23,
                'idCondicion' => 3,
                'idReclamo' => 4,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 12:50:58',
                'updated_at' => '2022-01-24 12:50:58',
            ),
            23 => 
            array (
                'id' => 24,
                'idCondicion' => 4,
                'idReclamo' => 4,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 12:50:58',
                'updated_at' => '2022-01-24 12:50:58',
            ),
            24 => 
            array (
                'id' => 25,
                'idCondicion' => 5,
                'idReclamo' => 4,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 12:50:58',
                'updated_at' => '2022-01-24 12:50:58',
            ),
            25 => 
            array (
                'id' => 26,
                'idCondicion' => 1,
                'idReclamo' => 4,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => '2022-01-24 13:05:28',
                'updated_at' => '2022-01-24 13:05:28',
            ),
            26 => 
            array (
                'id' => 27,
                'idCondicion' => 2,
                'idReclamo' => 4,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => '2022-01-24 13:05:28',
                'updated_at' => '2022-01-24 13:05:28',
            ),
            27 => 
            array (
                'id' => 28,
                'idCondicion' => 3,
                'idReclamo' => 4,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => '2022-01-24 13:05:28',
                'updated_at' => '2022-01-24 13:05:28',
            ),
            28 => 
            array (
                'id' => 29,
                'idCondicion' => 4,
                'idReclamo' => 4,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => '2022-01-24 13:05:28',
                'updated_at' => '2022-01-24 13:05:28',
            ),
            29 => 
            array (
                'id' => 30,
                'idCondicion' => 5,
                'idReclamo' => 4,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => '2022-01-24 13:05:28',
                'updated_at' => '2022-01-24 13:05:28',
            ),
            30 => 
            array (
                'id' => 31,
                'idCondicion' => 1,
                'idReclamo' => 5,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 15:35:25',
                'updated_at' => '2022-01-24 15:35:25',
            ),
            31 => 
            array (
                'id' => 32,
                'idCondicion' => 2,
                'idReclamo' => 5,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 15:35:25',
                'updated_at' => '2022-01-24 15:35:25',
            ),
            32 => 
            array (
                'id' => 33,
                'idCondicion' => 3,
                'idReclamo' => 5,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 15:35:25',
                'updated_at' => '2022-01-24 15:35:25',
            ),
            33 => 
            array (
                'id' => 34,
                'idCondicion' => 4,
                'idReclamo' => 5,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 15:35:25',
                'updated_at' => '2022-01-24 15:35:25',
            ),
            34 => 
            array (
                'id' => 35,
                'idCondicion' => 5,
                'idReclamo' => 5,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '27',
                'created_at' => '2022-01-24 15:35:25',
                'updated_at' => '2022-01-24 15:35:25',
            ),
            35 => 
            array (
                'id' => 36,
                'idCondicion' => 13,
                'idReclamo' => 6,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => '2022-01-24 17:19:47',
                'updated_at' => '2022-01-24 17:19:47',
            ),
            36 => 
            array (
                'id' => 37,
                'idCondicion' => 13,
                'idReclamo' => 7,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => '1',
                'created_at' => '2022-01-24 17:26:35',
                'updated_at' => '2022-01-24 17:26:35',
            ),
            37 => 
            array (
                'id' => 38,
                'idCondicion' => 6,
                'idReclamo' => 23,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'idCondicion' => 7,
                'idReclamo' => 23,
                'respuesta' => ' ',
                'activo' => 0,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'idCondicion' => 8,
                'idReclamo' => 23,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'idCondicion' => 9,
                'idReclamo' => 23,
                'respuesta' => ' ',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}