<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReclamoEstadoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reclamo_estado')->delete();
        
        \DB::table('reclamo_estado')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idReclamo' => 1,
                'idEstado' => 1,
                'observacion' => 'pendiente por guia',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 10:33:27',
                'updated_at' => '2022-01-24 10:33:27',
            ),
            1 => 
            array (
                'id' => 2,
                'idReclamo' => 1,
                'idEstado' => 3,
                'observacion' => 'movió la garantía a en transito',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 10:55:49',
                'updated_at' => '2022-01-24 10:55:49',
            ),
            2 => 
            array (
                'id' => 3,
                'idReclamo' => 1,
                'idEstado' => 4,
                'observacion' => 'La garantía está en espera por análisis',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 11:27:06',
                'updated_at' => '2022-01-24 11:27:06',
            ),
            3 => 
            array (
                'id' => 4,
                'idReclamo' => 2,
                'idEstado' => 1,
                'observacion' => 'pendiente por guia',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 11:46:24',
                'updated_at' => '2022-01-24 11:46:24',
            ),
            4 => 
            array (
                'id' => 5,
                'idReclamo' => 3,
                'idEstado' => 1,
                'observacion' => 'pendiente por guia',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:08:24',
                'updated_at' => '2022-01-24 12:08:24',
            ),
            5 => 
            array (
                'id' => 6,
                'idReclamo' => 1,
                'idEstado' => 5,
                'observacion' => 'movió la garantía a espera por crédito',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 12:09:48',
                'updated_at' => '2022-01-24 12:09:48',
            ),
            6 => 
            array (
                'id' => 7,
                'idReclamo' => 4,
                'idEstado' => 1,
                'observacion' => 'pendiente por guia',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:50:58',
                'updated_at' => '2022-01-24 12:50:58',
            ),
            7 => 
            array (
                'id' => 8,
                'idReclamo' => 4,
                'idEstado' => 3,
                'observacion' => 'movió la garantía a en transito',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:52:25',
                'updated_at' => '2022-01-24 12:52:25',
            ),
            8 => 
            array (
                'id' => 9,
                'idReclamo' => 2,
                'idEstado' => 3,
                'observacion' => 'movió la garantía a en transito',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:52:58',
                'updated_at' => '2022-01-24 12:52:58',
            ),
            9 => 
            array (
                'id' => 10,
                'idReclamo' => 3,
                'idEstado' => 3,
                'observacion' => 'movió la garantía a en transito',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:52:58',
                'updated_at' => '2022-01-24 12:52:58',
            ),
            10 => 
            array (
                'id' => 11,
                'idReclamo' => 2,
                'idEstado' => 4,
                'observacion' => 'La garantía está en espera por análisis',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 12:57:41',
                'updated_at' => '2022-01-24 12:57:41',
            ),
            11 => 
            array (
                'id' => 12,
                'idReclamo' => 3,
                'idEstado' => 4,
                'observacion' => 'La garantía está en espera por análisis',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 12:57:41',
                'updated_at' => '2022-01-24 12:57:41',
            ),
            12 => 
            array (
                'id' => 13,
                'idReclamo' => 4,
                'idEstado' => 4,
                'observacion' => 'La garantía está en espera por análisis',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 12:57:55',
                'updated_at' => '2022-01-24 12:57:55',
            ),
            13 => 
            array (
                'id' => 14,
                'idReclamo' => 4,
                'idEstado' => 5,
                'observacion' => 'movió la garantía a espera por crédito',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 13:07:14',
                'updated_at' => '2022-01-24 13:07:14',
            ),
            14 => 
            array (
                'id' => 15,
                'idReclamo' => 5,
                'idEstado' => 1,
                'observacion' => 'pendiente por guia',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 15:35:25',
                'updated_at' => '2022-01-24 15:35:25',
            ),
            15 => 
            array (
                'id' => 16,
                'idReclamo' => 5,
                'idEstado' => 3,
                'observacion' => 'movió la garantía a en transito',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 15:36:30',
                'updated_at' => '2022-01-24 15:36:30',
            ),
            16 => 
            array (
                'id' => 17,
                'idReclamo' => 6,
                'idEstado' => 1,
                'observacion' => 'pendiente por guia',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 17:19:47',
                'updated_at' => '2022-01-24 17:19:47',
            ),
            17 => 
            array (
                'id' => 18,
                'idReclamo' => 7,
                'idEstado' => 1,
                'observacion' => 'pendiente por guia',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 17:26:35',
                'updated_at' => '2022-01-24 17:26:35',
            ),
            18 => 
            array (
                'id' => 19,
                'idReclamo' => 4,
                'idEstado' => 6,
                'observacion' => 'movió la garantía a cerrado',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-27 13:04:08',
                'updated_at' => '2022-01-27 13:04:08',
            ),
            19 => 
            array (
                'id' => 21,
                'idReclamo' => 23,
                'idEstado' => 3,
                'observacion' => 'movió la garantía a en transito',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}