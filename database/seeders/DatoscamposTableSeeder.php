<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatoscamposTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('datoscampos')->delete();
        
        \DB::table('datoscampos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idProducto' => 1,
                'descripcion' => 'Neumático Renovado',
                'serial' => 1,
                'boleta' => 1,
                'tipo_renovado' => 1,
                'profundidad' => 1,
                'diseno' => 1,
                'medida' => 1,
                'modelo' => 1,
                'marca' => 1,
                'dotSerial' => 1,
                'activo' => 0,
                'estado' => 0,
                'idUsuario' => '0',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'valvula' => 0,
                'fecha_recepcion' => 1,
                'lote_vulcanizacion' => 1,
                'lote_banda' => 1,
                'lote_producto' => 0,
                'pais' => 0,
                'tipo_producto' => 0,
                'descri_prod' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'idProducto' => 2,
                'descripcion' => 'Original',
                'serial' => 0,
                'boleta' => 0,
                'tipo_renovado' => 0,
                'profundidad' => 1,
                'diseno' => 1,
                'medida' => 1,
                'modelo' => 1,
                'marca' => 1,
                'dotSerial' => 1,
                'activo' => 0,
                'estado' => 0,
                'idUsuario' => '0',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'valvula' => 0,
                'fecha_recepcion' => 1,
                'lote_vulcanizacion' => 1,
                'lote_banda' => 1,
                'lote_producto' => 0,
                'pais' => 0,
                'tipo_producto' => 0,
                'descri_prod' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'idProducto' => 3,
                'descripcion' => 'Cámara de aire',
                'serial' => 1,
                'boleta' => 0,
                'tipo_renovado' => 0,
                'profundidad' => 0,
                'diseno' => 0,
                'medida' => 1,
                'modelo' => 0,
                'marca' => 1,
                'dotSerial' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '0',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'valvula' => 1,
                'fecha_recepcion' => 1,
                'lote_vulcanizacion' => 1,
                'lote_banda' => 1,
                'lote_producto' => 0,
                'pais' => 0,
                'tipo_producto' => 0,
                'descri_prod' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'idProducto' => 4,
                'descripcion' => 'Cauchos Industriales',
                'serial' => 0,
                'boleta' => 0,
                'tipo_renovado' => 0,
                'profundidad' => 1,
                'diseno' => 1,
                'medida' => 1,
                'modelo' => 0,
                'marca' => 0,
                'dotSerial' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '0',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'valvula' => 0,
                'fecha_recepcion' => 0,
                'lote_vulcanizacion' => 0,
                'lote_banda' => 0,
                'lote_producto' => 0,
                'pais' => 0,
                'tipo_producto' => 1,
                'descri_prod' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'idProducto' => 5,
                'descripcion' => 'Protectores',
                'serial' => 0,
                'boleta' => 0,
                'tipo_renovado' => 0,
                'profundidad' => 0,
                'diseno' => 0,
                'medida' => 0,
                'modelo' => 0,
                'marca' => 1,
                'dotSerial' => 0,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => '0',
                'created_at' => '2022-01-09 16:25:17',
                'updated_at' => '2022-01-09 16:25:17',
                'valvula' => 0,
                'fecha_recepcion' => 0,
                'lote_vulcanizacion' => 0,
                'lote_banda' => 0,
                'lote_producto' => 1,
                'pais' => 0,
                'tipo_producto' => 0,
                'descri_prod' => 1,
            ),
        ));
        
        
    }
}