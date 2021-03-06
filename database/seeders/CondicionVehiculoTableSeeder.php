<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CondicionVehiculoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('condicion_vehiculo')->delete();
        
        \DB::table('condicion_vehiculo')->insert(array (
            0 => 
            array (
                'id' => 39,
                'idReclamo' => 92,
                'idTipoVehiculo' => 1,
                'idMarca' => 1,
                'idModelo' => 1,
                'idCargaVehiculo' => 15,
                'idTipoCargaVehiculo' => 7,
                'idEjeVehiculo' => 1,
                'kilometraje' => 342342334.0,
                'anchoRin' => 234,
                'psi' => 234,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 43,
                'idReclamo' => 30,
                'idTipoVehiculo' => 1,
                'idMarca' => 1,
                'idModelo' => 1,
                'idCargaVehiculo' => 14,
                'idTipoCargaVehiculo' => 17,
                'idEjeVehiculo' => 1,
                'kilometraje' => 23123.0,
                'anchoRin' => 32,
                'psi' => 23,
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 26,
                'created_at' => '2022-01-23 21:23:00',
                'updated_at' => '2022-01-23 21:23:00',
            ),
            2 => 
            array (
                'id' => 44,
                'idReclamo' => 96,
                'idTipoVehiculo' => 1,
                'idMarca' => 1,
                'idModelo' => 1,
                'idCargaVehiculo' => 3,
                'idTipoCargaVehiculo' => 9,
                'idEjeVehiculo' => 1,
                'kilometraje' => 132132123.0,
                'anchoRin' => 23,
                'psi' => 22,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 45,
                'idReclamo' => 193,
                'idTipoVehiculo' => 1,
                'idMarca' => 1,
                'idModelo' => 1,
                'idCargaVehiculo' => 12,
                'idTipoCargaVehiculo' => 7,
                'idEjeVehiculo' => 1,
                'kilometraje' => 1200.0,
                'anchoRin' => 14,
                'psi' => 150,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 46,
                'idReclamo' => 194,
                'idTipoVehiculo' => 1,
                'idMarca' => 2,
                'idModelo' => 3,
                'idCargaVehiculo' => 5,
                'idTipoCargaVehiculo' => 7,
                'idEjeVehiculo' => 1,
                'kilometraje' => 2000.0,
                'anchoRin' => 14,
                'psi' => 150,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 47,
                'idReclamo' => 1,
                'idTipoVehiculo' => 1,
                'idMarca' => 1,
                'idModelo' => 1,
                'idCargaVehiculo' => 2,
                'idTipoCargaVehiculo' => 2,
                'idEjeVehiculo' => 1,
                'kilometraje' => 223.0,
                'anchoRin' => 33,
                'psi' => 44,
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 10:33:27',
                'updated_at' => '2022-01-24 10:33:27',
            ),
            6 => 
            array (
                'id' => 48,
                'idReclamo' => 2,
                'idTipoVehiculo' => 2,
                'idMarca' => 1,
                'idModelo' => 1,
                'idCargaVehiculo' => 11,
                'idTipoCargaVehiculo' => 4,
                'idEjeVehiculo' => 1,
                'kilometraje' => 1500.0,
                'anchoRin' => 9,
                'psi' => 110,
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 11:46:24',
                'updated_at' => '2022-01-24 11:46:24',
            ),
            7 => 
            array (
                'id' => 49,
                'idReclamo' => 3,
                'idTipoVehiculo' => 2,
                'idMarca' => 1,
                'idModelo' => 1,
                'idCargaVehiculo' => 11,
                'idTipoCargaVehiculo' => 1,
                'idEjeVehiculo' => 1,
                'kilometraje' => 1500.0,
                'anchoRin' => 9,
                'psi' => 110,
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:08:24',
                'updated_at' => '2022-01-24 12:08:24',
            ),
            8 => 
            array (
                'id' => 50,
                'idReclamo' => 4,
                'idTipoVehiculo' => 1,
                'idMarca' => 1,
                'idModelo' => 1,
                'idCargaVehiculo' => 10,
                'idTipoCargaVehiculo' => 15,
                'idEjeVehiculo' => 1,
                'kilometraje' => 1500.0,
                'anchoRin' => 9,
                'psi' => 110,
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 12:50:58',
                'updated_at' => '2022-01-24 12:50:58',
            ),
            9 => 
            array (
                'id' => 51,
                'idReclamo' => 5,
                'idTipoVehiculo' => 1,
                'idMarca' => 6,
                'idModelo' => 5,
                'idCargaVehiculo' => 2,
                'idTipoCargaVehiculo' => 15,
                'idEjeVehiculo' => 1,
                'kilometraje' => 1500.0,
                'anchoRin' => 9,
                'psi' => 110,
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 27,
                'created_at' => '2022-01-24 15:35:25',
                'updated_at' => '2022-01-24 15:35:25',
            ),
            10 => 
            array (
                'id' => 52,
                'idReclamo' => 6,
                'idTipoVehiculo' => 1,
                'idMarca' => 1,
                'idModelo' => 1,
                'idCargaVehiculo' => 3,
                'idTipoCargaVehiculo' => 1,
                'idEjeVehiculo' => 1,
                'kilometraje' => 123.0,
                'anchoRin' => 23,
                'psi' => 23,
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 17:19:47',
                'updated_at' => '2022-01-24 17:19:47',
            ),
            11 => 
            array (
                'id' => 53,
                'idReclamo' => 7,
                'idTipoVehiculo' => 4,
                'idMarca' => 1,
                'idModelo' => 1,
                'idCargaVehiculo' => 3,
                'idTipoCargaVehiculo' => 5,
                'idEjeVehiculo' => 1,
                'kilometraje' => 349000.0,
                'anchoRin' => 35,
                'psi' => 24,
                'activo' => 1,
                'estado' => 1,
                'idUsuario' => 1,
                'created_at' => '2022-01-24 17:26:35',
                'updated_at' => '2022-01-24 17:26:35',
            ),
            12 => 
            array (
                'id' => 54,
                'idReclamo' => 23,
                'idTipoVehiculo' => 1,
                'idMarca' => 1,
                'idModelo' => 1,
                'idCargaVehiculo' => 3,
                'idTipoCargaVehiculo' => 1,
                'idEjeVehiculo' => 1,
                'kilometraje' => 123456.0,
                'anchoRin' => 12,
                'psi' => 23,
                'activo' => 1,
                'estado' => 0,
                'idUsuario' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}