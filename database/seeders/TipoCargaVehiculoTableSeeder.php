<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoCargaVehiculoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipo_carga_vehiculo')->delete();
        
        \DB::table('tipo_carga_vehiculo')->insert(array (
            0 => 
            array (
                'id' => 1,
            'descripcion' => 'Alimentos (Producto terminado)',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            1 => 
            array (
                'id' => 2,
                'descripcion' => 'test',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            2 => 
            array (
                'id' => 3,
            'descripcion' => 'Alimentos (Frutas y Hortalizas)',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            3 => 
            array (
                'id' => 4,
            'descripcion' => 'Bebidas (Refrescos, cervezas)',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            4 => 
            array (
                'id' => 5,
                'descripcion' => 'Construcción',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            5 => 
            array (
                'id' => 6,
                'descripcion' => 'Maquinarias',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            6 => 
            array (
                'id' => 7,
                'descripcion' => 'Gruas',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            7 => 
            array (
                'id' => 8,
                'descripcion' => 'Siderúrgica',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            8 => 
            array (
                'id' => 9,
                'descripcion' => 'Minería',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            9 => 
            array (
                'id' => 10,
                'descripcion' => 'Equipos electrónicos y electrodomésticos',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            10 => 
            array (
                'id' => 11,
                'descripcion' => 'Farmacéutico',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            11 => 
            array (
                'id' => 12,
                'descripcion' => 'Cuidado personal y del hogar',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            12 => 
            array (
                'id' => 13,
                'descripcion' => 'Cisterna de agua',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            13 => 
            array (
                'id' => 14,
            'descripcion' => 'Tanques de químicos (Liquidos, gases)',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            14 => 
            array (
                'id' => 15,
                'descripcion' => 'Pasajeros / Colectivos',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            15 => 
            array (
                'id' => 16,
                'descripcion' => 'Productos agrícolas o pecuarios a granel',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
            16 => 
            array (
                'id' => 17,
                'descripcion' => 'Textiles',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:25',
                'updated_at' => '2021-10-26 17:44:25',
            ),
        ));
        
        
    }
}