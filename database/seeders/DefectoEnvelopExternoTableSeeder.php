<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DefectoEnvelopExternoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('defecto_envelop_externo')->delete();
        
        \DB::table('defecto_envelop_externo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'codigo' => '105A',
                'descripcion' => 'Ampolla en el cuerpo',
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
                'codigo' => '115A',
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
                'codigo' => '115B',
                'descripcion' => 'Material extraño de Vulcanización',
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
                'codigo' => '801A',
            'descripcion' => 'Empate Abierto (Entrada)',
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
                'codigo' => '801B',
            'descripcion' => 'Empate Abierto (Entrada-Cambio)',
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
                'codigo' => '801C',
            'descripcion' => 'Empate Abierto (Cuerpo)',
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
                'codigo' => '801D',
            'descripcion' => 'Empate Abierto (Salida-Cambio)',
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
                'codigo' => '801E',
            'descripcion' => 'Empate Abierto (Salida)',
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
                'codigo' => '802',
                'descripcion' => 'Empate Pegado',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            9 => 
            array (
                'id' => 10,
                'codigo' => '803',
                'descripcion' => 'Empate Agrietado',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            10 => 
            array (
                'id' => 11,
                'codigo' => '812',
                'descripcion' => 'Pliegue Longitudinal en el cuerpo',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            11 => 
            array (
                'id' => 12,
                'codigo' => '813',
                'descripcion' => 'Pliegue Transversal',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            12 => 
            array (
                'id' => 13,
                'codigo' => '821A',
            'descripcion' => 'Debilidad en el cuerpo(hombro del envelope)',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            13 => 
            array (
                'id' => 14,
                'codigo' => '821B',
                'descripcion' => 'Debilidad en el Corona',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            14 => 
            array (
                'id' => 15,
                'codigo' => '822A',
            'descripcion' => 'Debilidad en el empate (hombro)',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            15 => 
            array (
                'id' => 16,
                'codigo' => '822B',
            'descripcion' => 'Debilidad en el empate (Corona)',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            16 => 
            array (
                'id' => 17,
                'codigo' => '824',
                'descripcion' => 'Punto debil en el cuerpo',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            17 => 
            array (
                'id' => 18,
                'codigo' => '830',
                'descripcion' => 'Crudo en un sector del Envelope/Bolsa',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            18 => 
            array (
                'id' => 19,
                'codigo' => '832',
                'descripcion' => 'Crudo en todo el cuerpo',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            19 => 
            array (
                'id' => 20,
                'codigo' => '833',
                'descripcion' => 'Envelope/Bolsa mordida',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            20 => 
            array (
                'id' => 21,
                'codigo' => '834',
                'descripcion' => 'Crudo en el Empate',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            21 => 
            array (
                'id' => 22,
                'codigo' => '836',
            'descripcion' => 'Envelope/Bolsa dañada (Mala Operación)',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            22 => 
            array (
                'id' => 23,
                'codigo' => '842',
                'descripcion' => 'Defecto Estético',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            23 => 
            array (
                'id' => 24,
                'codigo' => '845',
                'descripcion' => 'Escalón',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            24 => 
            array (
                'id' => 25,
                'codigo' => '957',
                'descripcion' => 'Identificación No Legible',
                'procede' => 1,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            25 => 
            array (
                'id' => 26,
                'codigo' => '222',
                'descripcion' => 'Sin Garantía Según Factura De Venta',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            26 => 
            array (
                'id' => 27,
                'codigo' => '229',
                'descripcion' => 'Fuera De Garantía Por Lote De Fábrica',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            27 => 
            array (
                'id' => 28,
                'codigo' => '237',
                'descripcion' => 'Material Degradado Por Mal Almacenamiento',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            28 => 
            array (
                'id' => 29,
                'codigo' => '9110',
                'descripcion' => 'Rasgadura Causada Por Herramental Durante El Montaje',
                'procede' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => '2021-10-26 17:44:22',
                'updated_at' => '2021-10-26 17:44:22',
            ),
            29 => 
            array (
                'id' => 30,
                'codigo' => '9116',
                'descripcion' => 'Sin Defecto En El Producto',
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