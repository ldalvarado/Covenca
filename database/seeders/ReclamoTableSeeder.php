<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReclamoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reclamo')->delete();
        
        \DB::table('reclamo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idSucursal' => 9,
                'idTipoDiagrama' => 1,
                'factura' => '*00002615',
                'fechaFactura' => '2021-02-24',
                'precio' => 915.75,
                'iva' => 146.52,
                'mtoTotal' => 1062.27,
                'rif' => 'J075594517',
                'nombre' => 'TRANSPORTE GAMA, C.A.',
                'direccion' => 'Calle 98 Parcela 1-72. Pque',
                'observacion' => 'Prueba',
                'codigoSucursal' => 'C91-100001',
                'codigoWeb' => '0',
                'codigoLocal' => '1',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 10:33:27',
                'updated_at' => '2022-01-24 10:33:27',
                'email' => 'nvacadiz@gmail.com',
                'telefono' => '1111',
            ),
            1 => 
            array (
                'id' => 2,
                'idSucursal' => 9,
                'idTipoDiagrama' => 1,
                'factura' => '00072709',
                'fechaFactura' => '2022-01-11',
                'precio' => 2075.02,
                'iva' => 332.0,
                'mtoTotal' => 2407.02,
                'rif' => 'J400373482',
                'nombre' => 'TRANSPORTE Y SUMINISTROS VENEZOLANOS 2012 TRANSUVEN 2012 C.A',
                'direccion' => 'CTRA VARIANTE SAN DIEGO-YAGUA LOCAL PARCELA DON PEDRO NRO',
                'observacion' => 'caucho que realizo un solo viaje  hacia la cuidad de San Cristobal, el cliente indica que el caucho explotó estando parado cuando llego a la cede de transporte.',
                'codigoSucursal' => 'C91-100002',
                'codigoWeb' => '0',
                'codigoLocal' => '1',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 11:46:24',
                'updated_at' => '2022-01-24 11:46:24',
                'email' => 'a@gmail.com',
                'telefono' => '04241234567',
            ),
            2 => 
            array (
                'id' => 3,
                'idSucursal' => 9,
                'idTipoDiagrama' => 1,
                'factura' => '00070071',
                'fechaFactura' => '2020-12-30',
                'precio' => 705.16,
                'iva' => 112.83,
                'mtoTotal' => 817.98,
                'rif' => 'J075122283',
                'nombre' => 'TRANSPORTE CATA, C.A.',
                'direccion' => 'ZONA INDUSTRIAL CASTILLITO ,AV # 66 C/C 97-A',
                'observacion' => 'DESCRIPCION 1',
                'codigoSucursal' => 'C91-100003',
                'codigoWeb' => '0',
                'codigoLocal' => '1',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:08:24',
                'updated_at' => '2022-01-24 12:08:24',
                'email' => 'a@gmail.com',
                'telefono' => '02418717375',
            ),
            3 => 
            array (
                'id' => 4,
                'idSucursal' => 9,
                'idTipoDiagrama' => 1,
                'factura' => '*00002733',
                'fechaFactura' => '2021-09-07',
                'precio' => 1259.0,
                'iva' => 201.44,
                'mtoTotal' => 1460.44,
                'rif' => 'V7091675',
                'nombre' => 'PEDRO JOSE ZAVALA  ROJAS',
                'direccion' => 'BARRIO LAS FLORES CALLE PAEZ CRUZE CON URDANETA NRO 14',
                'observacion' => 'DESCRIPCION 1',
                'codigoSucursal' => 'C91-100004',
                'codigoWeb' => '0',
                'codigoLocal' => '1',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:50:58',
                'updated_at' => '2022-01-24 12:50:58',
                'email' => 'a@gmail.com',
                'telefono' => '04241234567',
            ),
            4 => 
            array (
                'id' => 5,
                'idSucursal' => 9,
                'idTipoDiagrama' => 1,
                'factura' => '*00002647',
                'fechaFactura' => '2021-06-02',
                'precio' => 4620.0,
                'iva' => 739.2,
                'mtoTotal' => 5359.2,
                'rif' => 'J075122283',
                'nombre' => 'TRANSPORTE CATA, C.A.',
                'direccion' => 'Av. 66/97A Edificio Transporte Cata Piso 1 Local  1',
                'observacion' => 'D1',
                'codigoSucursal' => 'C91-100005',
                'codigoWeb' => '0',
                'codigoLocal' => '1',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 15:35:25',
                'updated_at' => '2022-01-24 15:35:25',
                'email' => 'a@gmail.com',
                'telefono' => '04241234567',
            ),
            5 => 
            array (
                'id' => 6,
                'idSucursal' => 1,
                'idTipoDiagrama' => 4,
                'factura' => 'A00001034',
                'fechaFactura' => '2020-01-14',
                'precio' => 6.0,
                'iva' => 0.96,
                'mtoTotal' => 6.96,
                'rif' => 'J310526664',
                'nombre' => 'TRANSPORTE 1º DE ORIENTE C A',
                'direccion' => 'Calle el Asilo N°9 BarrioBrisas Del Mar',
                'observacion' => 'Prueba',
                'codigoSucursal' => 'C01-100001',
                'codigoWeb' => '0',
                'codigoLocal' => '1',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 17:19:46',
                'updated_at' => '2022-01-24 17:19:46',
                'email' => 'prueba@gmail.com',
                'telefono' => '123',
            ),
            6 => 
            array (
                'id' => 7,
                'idSucursal' => 1,
                'idTipoDiagrama' => 4,
                'factura' => 'A00001032',
                'fechaFactura' => '2020-01-09',
                'precio' => 4.01,
                'iva' => 0.64,
                'mtoTotal' => 4.65,
                'rif' => 'J310526664',
                'nombre' => 'TRANSPORTE 1º DE ORIENTE C A',
                'direccion' => 'Calle el Asilo N°9 BarrioBrisas Del Mar',
                'observacion' => 'Tiene un poporo en el lomo del caucho',
                'codigoSucursal' => 'C01-100002',
                'codigoWeb' => '0',
                'codigoLocal' => '1',
                'activo' => 0,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 17:26:35',
                'updated_at' => '2022-01-24 17:26:35',
                'email' => 'prueba@gmail.com',
                'telefono' => '2233',
            ),
            7 => 
            array (
                'id' => 23,
                'idSucursal' => 5,
                'idTipoDiagrama' => 2,
                'factura' => 'A00001046',
                'fechaFactura' => '2020-07-07',
                'precio' => 143.22,
                'iva' => 22.92,
                'mtoTotal' => 166.14,
                'rif' => 'J298999632',
                'nombre' => 'GRUPO HERMANOS MARCANO C A',
                'direccion' => 'AV. FUERZAS ARMADAS CENTRO EMPRESARIAL BARCELONA  GALPON 13',
                'observacion' => 'Prueba de Subida al servidor',
                'codigoSucursal' => 'A50-100001',
                'codigoWeb' => '0',
                'codigoLocal' => '1',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'email' => 'prueba@hotmail.com',
                'telefono' => '1234',
            ),
            8 => 
            array (
                'id' => 24,
                'idSucursal' => 5,
                'idTipoDiagrama' => 2,
                'factura' => 'A00001046',
                'fechaFactura' => '2020-07-07',
                'precio' => 143.22,
                'iva' => 22.92,
                'mtoTotal' => 166.14,
                'rif' => 'J298999632',
                'nombre' => 'GRUPO HERMANOS MARCANO C A',
                'direccion' => 'AV. FUERZAS ARMADAS CENTRO EMPRESARIAL BARCELONA  GALPON 13',
                'observacion' => 'Prueba de Subida al servidor',
                'codigoSucursal' => 'A50-100001',
                'codigoWeb' => '0',
                'codigoLocal' => '1',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'email' => 'prueba@hotmail.com',
                'telefono' => '1234',
            ),
            9 => 
            array (
                'id' => 25,
                'idSucursal' => 5,
                'idTipoDiagrama' => 2,
                'factura' => 'A00001046',
                'fechaFactura' => '2020-07-07',
                'precio' => 143.22,
                'iva' => 22.92,
                'mtoTotal' => 166.14,
                'rif' => 'J298999632',
                'nombre' => 'GRUPO HERMANOS MARCANO C A',
                'direccion' => 'AV. FUERZAS ARMADAS CENTRO EMPRESARIAL BARCELONA  GALPON 13',
                'observacion' => 'Prueba de Subida al servidor',
                'codigoSucursal' => 'A50-100001',
                'codigoWeb' => '0',
                'codigoLocal' => '1',
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'email' => 'prueba@hotmail.com',
                'telefono' => '1234',
            ),
        ));
        
        
    }
}