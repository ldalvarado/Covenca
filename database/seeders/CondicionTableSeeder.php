<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CondicionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        
        
        \DB::table('condicion')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idProducto' => 1,
                'descripcion' => 'Posee reparaciones realizadas por terceros',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'idProducto' => 1,
                'descripcion' => 'Presenta daños en talones y/o pestañas ocasionado cuando el proceso de montaje y desmontaje',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'idProducto' => 1,
                'descripcion' => 'Posee la banda de rodamiento y que la estructura aún permita visualizar la avería',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'idProducto' => 1,
            'descripcion' => 'Posee la etiqueta de producción de Covencaucho Industrias S.A. (Cauchos Renovados)',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'idProducto' => 1,
                'descripcion' => 'Posee el DOT/Serial',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'idProducto' => 2,
                'descripcion' => 'Posee reparaciones realizadas por terceros',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'idProducto' => 2,
                'descripcion' => 'Presenta daños en talones y/o pestañas ocasionado cuando el proceso de montaje y desmontaje',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'idProducto' => 2,
                'descripcion' => 'Posee la banda de rodamiento y que la estructura aún permita visualizar la avería',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'idProducto' => 2,
                'descripcion' => 'Posee el DOT/Serial',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'idProducto' => 3,
                'descripcion' => 'Posee la identificación de la marca, medida y lote de producción',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'idProducto' => 3,
                'descripcion' => 'Presenta daños en la válvula por un montaje inadecuado',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 0,
            ),
            11 => 
            array (
                'id' => 13,
                'idProducto' => 4,
                'descripcion' => 'Posee la identificación de la marca, medida y lote de producción',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 1,
            ),
            12 => 
            array (
                'id' => 14,
                'idProducto' => 5,
                'descripcion' => 'Posee la identificación de la marca, medida y lote de producción',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '1',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'respuesta' => 1,
            ),
        ));
        
        
    }
}