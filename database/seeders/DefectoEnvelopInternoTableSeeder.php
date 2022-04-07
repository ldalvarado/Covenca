<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DefectoEnvelopInternoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('defecto_envelop_interno')->delete();
        
        \DB::table('defecto_envelop_interno')->insert(array (
            0 => 
            array (
                'id' => 1,
                'codigo' => '106A',
                'descripcion' => 'Ampollas en el cuerpo',
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
                'codigo' => '116A',
                'descripcion' => 'Material Extraño de Extrusión',
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
                'codigo' => '116B',
                'descripcion' => 'Material Extraño de Vulcanización',
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
                'codigo' => '550',
            'descripcion' => 'Rotura en el perfil (Sup-Inf)',
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
                'codigo' => '814B',
                'descripcion' => 'Láminas despegadas Base',
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
                'codigo' => '814C',
                'descripcion' => 'Láminas despegadas Corona',
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
                'codigo' => '814E',
                'descripcion' => 'Láminas despegadas Empate',
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
                'codigo' => '815',
                'descripcion' => 'Falta de material en la corona del Envelope',
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
                'codigo' => '816',
                'descripcion' => 'Ampollas entre el perfil y la lámina',
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
                'codigo' => '817',
                'descripcion' => 'Falta de material en la solapa',
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
                'codigo' => '818',
                'descripcion' => 'Ampollas en el perfil',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            11 => 
            array (
                'id' => 12,
                'codigo' => '819',
                'descripcion' => 'Falta de material en el perfil',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            12 => 
            array (
                'id' => 13,
                'codigo' => '820',
                'descripcion' => 'Perfil despegado',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            13 => 
            array (
                'id' => 14,
                'codigo' => '830',
                'descripcion' => 'Crudo en un sector del Envelope',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            14 => 
            array (
                'id' => 15,
                'codigo' => '832',
                'descripcion' => 'Crudo en todo el cuerpo',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            15 => 
            array (
                'id' => 16,
                'codigo' => '842',
                'descripcion' => 'Defecto Estetico',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            16 => 
            array (
                'id' => 17,
                'codigo' => '957',
                'descripcion' => 'Identificación No Legible',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            17 => 
            array (
                'id' => 18,
                'codigo' => '222',
                'descripcion' => 'Sin Garantía Según Factura De Venta',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            18 => 
            array (
                'id' => 19,
                'codigo' => '229',
                'descripcion' => 'Fuera De Garantía Por Lote De Fábrica',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            19 => 
            array (
                'id' => 20,
                'codigo' => '237',
                'descripcion' => 'Material Degradado Por Mal Almacenamiento',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            20 => 
            array (
                'id' => 21,
                'codigo' => '9110',
                'descripcion' => 'Rasgadura Causada Por Herramental Durante El Montaje',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:23',
                'updated_at' => '2021-10-26 17:44:23',
            ),
            21 => 
            array (
                'id' => 22,
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