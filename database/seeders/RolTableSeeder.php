<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rol')->delete();
        
        \DB::table('rol')->insert(array (
            0 => 
            array (
                'id' => 1,
                'descripcion' => 'Administrador',
                'activo' => 1,
                'estado' => 1,
                'created_at' => '2022-02-02 17:38:43',
                'updated_at' => '2022-02-02 17:38:43',
                'idUsuario' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'Gestion de Garantías',
                'activo' => 1,
                'estado' => 1,
                'created_at' => '2022-02-02 17:38:43',
                'updated_at' => '2022-02-02 17:38:43',
                'idUsuario' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'descripcion' => 'Analista de Crédito',
                'activo' => 1,
                'estado' => 1,
                'created_at' => '2022-02-02 17:38:43',
                'updated_at' => '2022-02-02 17:38:43',
                'idUsuario' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'descripcion' => 'Analista Técnico',
                'activo' => 1,
                'estado' => 1,
                'created_at' => '2022-02-02 17:38:43',
                'updated_at' => '2022-02-02 17:38:43',
                'idUsuario' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'descripcion' => 'Distribuidor Comercial',
                'activo' => 1,
                'estado' => 1,
                'created_at' => '2022-02-02 17:38:43',
                'updated_at' => '2022-02-02 17:38:43',
                'idUsuario' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'descripcion' => 'Analista de Almacen',
                'activo' => 1,
                'estado' => 1,
                'created_at' => '2022-02-02 17:38:43',
                'updated_at' => '2022-02-02 17:38:43',
                'idUsuario' => 1,
            ),
        ));
        
        
    }
}