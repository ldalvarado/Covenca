<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReclamoCompraTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reclamo_compra')->delete();
        
        \DB::table('reclamo_compra')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idReclamo' => 1,
                'NumeroD' => '521/180771',
                'Fecha' => '2020-11-09 00:00:00',
                'CodProv' => '085037667R',
                'Descrip' => 'COVENCAUCHO INDUSTRIAS, S.A.',
                'Direc1' => 'CARRERA 1 CON CALLE 4 ZONA IND II',
                'Monto' => '4',
                'MtoTax' => '1',
                'TExento' => '0',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 10:33:27',
                'updated_at' => '2022-01-24 10:33:27',
            ),
            1 => 
            array (
                'id' => 2,
                'idReclamo' => 2,
                'NumeroD' => '521/184732',
                'Fecha' => '2021-12-27 00:00:00',
                'CodProv' => '085037667R',
                'Descrip' => 'COVENCAUCHO INDUSTRIAS, S.A.',
                'Direc1' => 'CARRERA 1 CON CALLE 4 ZONA IND II',
                'Monto' => '8611',
                'MtoTax' => '1378',
                'TExento' => '0',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 11:46:24',
                'updated_at' => '2022-01-24 11:46:24',
            ),
            2 => 
            array (
                'id' => 3,
                'idReclamo' => 3,
                'NumeroD' => '521/181136',
                'Fecha' => '2020-12-17 00:00:00',
                'CodProv' => '085037667R',
                'Descrip' => 'COVENCAUCHO INDUSTRIAS, S.A.',
                'Direc1' => 'CARRERA 1 CON CALLE 4 ZONA IND II',
                'Monto' => '693',
                'MtoTax' => '111',
                'TExento' => '0',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:08:24',
                'updated_at' => '2022-01-24 12:08:24',
            ),
            3 => 
            array (
                'id' => 4,
                'idReclamo' => 4,
                'NumeroD' => '521/182530',
                'Fecha' => '2021-06-11 00:00:00',
                'CodProv' => '085037667R',
                'Descrip' => 'COVENCAUCHO INDUSTRIAS, S.A.',
                'Direc1' => 'CARRERA 1 CON CALLE 4 ZONA IND II',
                'Monto' => '2500',
                'MtoTax' => '400',
                'TExento' => '0',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:50:58',
                'updated_at' => '2022-01-24 12:50:58',
            ),
            4 => 
            array (
                'id' => 5,
                'idReclamo' => 5,
                'NumeroD' => '521/181834',
                'Fecha' => '2021-03-15 00:00:00',
                'CodProv' => '085037667R',
                'Descrip' => 'COVENCAUCHO INDUSTRIAS, S.A.',
                'Direc1' => 'CARRERA 1 CON CALLE 4 ZONA IND II',
                'Monto' => '9431',
                'MtoTax' => '1509',
                'TExento' => '0',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 15:35:25',
                'updated_at' => '2022-01-24 15:35:25',
            ),
            5 => 
            array (
                'id' => 6,
                'idReclamo' => 6,
                'NumeroD' => '521/178228',
                'Fecha' => '2020-01-15 00:00:00',
                'CodProv' => '085037667P',
                'Descrip' => 'COVENCAUCHO INDUSTRIAS, S.A',
                'Direc1' => 'CARRERA 1 C/C 4 ZONA IND. 2 BARQUISIMETO',
                'Monto' => '2',
                'MtoTax' => '0',
                'TExento' => '0',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 17:19:47',
                'updated_at' => '2022-01-24 17:19:47',
            ),
            6 => 
            array (
                'id' => 7,
                'idReclamo' => 7,
                'NumeroD' => '521/178208',
                'Fecha' => '2020-01-13 00:00:00',
                'CodProv' => '085037667P',
                'Descrip' => 'COVENCAUCHO INDUSTRIAS, S.A',
                'Direc1' => 'CARRERA 1 C/C 4 ZONA IND. 2 BARQUISIMETO',
                'Monto' => '4',
                'MtoTax' => '1',
                'TExento' => '0',
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 17:26:35',
                'updated_at' => '2022-01-24 17:26:35',
            ),
        ));
        
        
    }
}