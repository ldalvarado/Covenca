<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DefectoProtectorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('defecto_protector')->delete();
        
        \DB::table('defecto_protector')->insert(array (
            0 => 
            array (
                'id' => 1,
                'codigo' => 'P001',
                'descripcion' => 'Material extraño en el cuerpo del protector',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            1 => 
            array (
                'id' => 2,
                'codigo' => 'P002',
                'descripcion' => 'Daños en el borde',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            2 => 
            array (
                'id' => 3,
                'codigo' => 'P003',
                'descripcion' => 'Canal en el cuerpo',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            3 => 
            array (
                'id' => 4,
                'codigo' => 'P004',
                'descripcion' => 'Ampolla',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            4 => 
            array (
                'id' => 5,
                'codigo' => 'P005',
                'descripcion' => 'Material crudo',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            5 => 
            array (
                'id' => 6,
                'codigo' => 'P006',
                'descripcion' => 'Porosidad',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            6 => 
            array (
                'id' => 7,
                'codigo' => 'P007',
                'descripcion' => 'Grieta',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            7 => 
            array (
                'id' => 8,
                'codigo' => 'P008',
                'descripcion' => 'Mal acabado',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            8 => 
            array (
                'id' => 9,
                'codigo' => 'P009',
                'descripcion' => 'Producto no CVC',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            9 => 
            array (
                'id' => 10,
                'codigo' => 'P957',
                'descripcion' => 'Identificación No Legible',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            10 => 
            array (
                'id' => 11,
                'codigo' => '222',
                'descripcion' => 'Sin Garantía Según Factura De Venta',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            11 => 
            array (
                'id' => 12,
                'codigo' => '229',
                'descripcion' => 'Fuera De Garantía Por Lote De Fábrica',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            12 => 
            array (
                'id' => 13,
                'codigo' => '237',
                'descripcion' => 'Material Degradado Por Mal Almacenamiento',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            13 => 
            array (
                'id' => 14,
                'codigo' => '9110',
                'descripcion' => 'Rasgadura Causada Por Herramental Durante El Montaje',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            14 => 
            array (
                'id' => 15,
                'codigo' => '9116',
                'descripcion' => 'Sin Defecto En El Producto',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
        ));
        
        
    }
}