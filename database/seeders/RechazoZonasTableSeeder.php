<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RechazoZonasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rechazo_zonas')->delete();
        
        \DB::table('rechazo_zonas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'Carcasa',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'Caucho original',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => 'Corona',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
            ),
            3 => 
            array (
                'id' => 4,
                'descripcion' => 'Corona / Hombros',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
            ),
            4 => 
            array (
                'id' => 5,
                'descripcion' => 'Corona / Hombros / Costado',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
            ),
            5 => 
            array (
                'id' => 6,
                'descripcion' => 'Costado',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
            ),
            6 => 
            array (
                'id' => 7,
                'descripcion' => 'Hombro',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
            ),
            7 => 
            array (
                'id' => 8,
                'descripcion' => 'Hombro/Costado',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
            ),
            8 => 
            array (
                'id' => 9,
                'descripcion' => 'Inner Liner',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
            ),
            9 => 
            array (
                'id' => 10,
                'descripcion' => 'Talón',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
            ),
        ));
        
        
    }
}