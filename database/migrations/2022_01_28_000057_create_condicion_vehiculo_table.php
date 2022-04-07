<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondicionVehiculoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'condicion_vehiculo';

    /**
     * Run the migrations.
     * @table condicion_vehiculo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idReclamo');
            $table->unsignedBigInteger('idTipoVehiculo');
            $table->unsignedBigInteger('idMarca');
            $table->unsignedBigInteger('idModelo');
            $table->unsignedBigInteger('idCargaVehiculo');
            $table->unsignedBigInteger('idTipoCargaVehiculo');
            $table->unsignedBigInteger('idEjeVehiculo');
            $table->double('kilometraje')->default('0.00');
            $table->integer('anchoRin')->default('0');
            $table->integer('psi')->default('0');
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->unsignedBigInteger('idUsuario');

            $table->index(["idReclamo"], 'condicion_vehiculo_idreclamo_foreign');

            $table->index(["idTipoVehiculo"], 'condicion_vehiculo_idtipovehiculo_foreign');

            $table->index(["idMarca"], 'condicion_vehiculo_idmarca_foreign');

            $table->index(["idModelo"], 'condicion_vehiculo_idmodelo_foreign');

            $table->index(["idCargaVehiculo"], 'condicion_vehiculo_idcargavehiculo_foreign');

            $table->index(["idTipoCargaVehiculo"], 'condicion_vehiculo_idtipocargavehiculo_foreign');

            $table->index(["idEjeVehiculo"], 'condicion_vehiculo_idejevehiculo_foreign');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
