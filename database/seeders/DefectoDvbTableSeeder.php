<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DefectoDvbTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('defecto_dvb')->delete();
        
        \DB::table('defecto_dvb')->insert(array (
            0 => 
            array (
                'id' => 1,
                'codigo' => '107A',
                'descripcion' => 'Ampollas en el cuerpo',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            1 => 
            array (
                'id' => 2,
                'codigo' => '117A',
                'descripcion' => 'Material Extraño de Extrusión',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            2 => 
            array (
                'id' => 3,
                'codigo' => '117B',
                'descripcion' => 'Material Extraño de Vulcanización',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            3 => 
            array (
                'id' => 4,
                'codigo' => 'DVB815',
                'descripcion' => 'Falta de material en el cuerpo',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            4 => 
            array (
                'id' => 5,
                'codigo' => 'DVB830',
                'descripcion' => 'Crudo en un sector',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            5 => 
            array (
                'id' => 6,
                'codigo' => 'DVB832',
                'descripcion' => 'Crudo en todo el cuerpo',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            6 => 
            array (
                'id' => 7,
                'codigo' => '841',
                'descripcion' => 'Mala perforación',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            7 => 
            array (
                'id' => 8,
                'codigo' => '842',
                'descripcion' => 'Defecto estético',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            8 => 
            array (
                'id' => 9,
                'codigo' => '9116',
                'descripcion' => 'Sin Defecto En El Producto',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            9 => 
            array (
                'id' => 10,
                'codigo' => '222',
                'descripcion' => 'Sin Garantía Según Factura De Venta',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            10 => 
            array (
                'id' => 11,
                'codigo' => '229',
                'descripcion' => 'Fuera De Garantía Por Lote De Fábrica',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            11 => 
            array (
                'id' => 12,
                'codigo' => '237',
                'descripcion' => 'Material Degradado Por Mal Almacenamiento',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
        ));
        
        
    }
}