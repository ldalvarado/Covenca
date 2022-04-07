<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocventaReclamoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('docventa_reclamo')->delete();
        
        \DB::table('docventa_reclamo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idReclamo' => 1,
                'idSucursal' => 9,
                'NumedoD' => '*00002615',
                'CodItem' => 'T26910000631',
                'descripcion' => '275/80 R22.5 VIPAL CAUCHO RENOV  CTE',
                'cantidad' => '1.0000',
                'TotalItem' => '240.5000',
                'Costo' => '27.5700',
                'Precio' => '240.5000',
                'MtoTax' => '38.4800',
                'activo' => 1,
                'created_at' => '2022-01-24 10:33:27',
                'updated_at' => '2022-01-24 10:33:27',
                'estado' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'idReclamo' => 2,
                'idSucursal' => 9,
                'NumedoD' => '00072709',
                'CodItem' => 'T16330000760',
                'descripcion' => '12R22.5 RG3 CLIENTE SERV RENOVACION',
                'cantidad' => '1.0000',
                'TotalItem' => '390.1400',
                'Costo' => '371.5600',
                'Precio' => '390.1400',
                'MtoTax' => '62.4224',
                'activo' => 1,
                'created_at' => '2022-01-24 11:46:24',
                'updated_at' => '2022-01-24 11:46:24',
                'estado' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'idReclamo' => 3,
                'idSucursal' => 9,
                'NumedoD' => '00070071',
                'CodItem' => 'T16000000633',
                'descripcion' => '295/80 R22.5 SERVICIO DE RENOVACION CTE',
                'cantidad' => '10.0000',
                'TotalItem' => '542.4300',
                'Costo' => '7.0400',
                'Precio' => '54.2400',
                'MtoTax' => '86.7900',
                'activo' => 1,
                'created_at' => '2022-01-24 12:08:24',
                'updated_at' => '2022-01-24 12:08:24',
                'estado' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'idReclamo' => 4,
                'idSucursal' => 9,
                'NumedoD' => '*00002733',
                'CodItem' => 'T16000000633',
                'descripcion' => '295/80 R22.5 SERVICIO DE RENOVACION CTE',
                'cantidad' => '1.0000',
                'TotalItem' => '235.6800',
                'Costo' => '85.2900',
                'Precio' => '235.6800',
                'MtoTax' => '37.7100',
                'activo' => 1,
                'created_at' => '2022-01-24 12:50:58',
                'updated_at' => '2022-01-24 12:50:58',
                'estado' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'idReclamo' => 5,
                'idSucursal' => 9,
                'NumedoD' => '*00002647',
                'CodItem' => 'T26054000633',
                'descripcion' => '295/80 R22.5 DOBER 500',
                'cantidad' => '8.0000',
                'TotalItem' => '3432.0000',
                'Costo' => '168.1400',
                'Precio' => '429.0000',
                'MtoTax' => '549.1200',
                'activo' => 1,
                'created_at' => '2022-01-24 15:35:25',
                'updated_at' => '2022-01-24 15:35:25',
                'estado' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'idReclamo' => 6,
                'idSucursal' => 1,
                'NumedoD' => 'A00001034',
                'CodItem' => 'T12051020020SCO',
                'descripcion' => '10.00R20 TR-78A',
                'cantidad' => '4.0000',
                'TotalItem' => '6.0000',
                'Costo' => '1.1000',
                'Precio' => '1.5000',
                'MtoTax' => '0.9600',
                'activo' => 1,
                'created_at' => '2022-01-24 17:19:47',
                'updated_at' => '2022-01-24 17:19:47',
                'estado' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'idReclamo' => 7,
                'idSucursal' => 1,
                'NumedoD' => 'A00001032',
                'CodItem' => 'T12051020020SCO',
                'descripcion' => '10.00R20 TR-78A',
                'cantidad' => '3.0000',
                'TotalItem' => '4.0100',
                'Costo' => '0.9000',
                'Precio' => '1.3400',
                'MtoTax' => '0.6400',
                'activo' => 1,
                'created_at' => '2022-01-24 17:26:35',
                'updated_at' => '2022-01-24 17:26:35',
                'estado' => 1,
            ),
        ));
        
        
    }
}