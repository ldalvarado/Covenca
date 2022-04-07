<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondicionCauchoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'condicion_caucho';

    /**
     * Run the migrations.
     * @table condicion_caucho
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idReclamo');
            $table->tinyInteger('reparacionesTerceros')->default('1');
            $table->tinyInteger('danioTalones')->default('1');
            $table->tinyInteger('bandaRodamiento')->default('1');
            $table->tinyInteger('etiquetaProduccion')->default('1');
            $table->tinyInteger('dotSerial')->default('1');
            $table->tinyInteger('renovacionMayor')->default('1');
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->unsignedBigInteger('idUsuario');

            $table->index(["idReclamo"], 'condicion_caucho_idreclamo_foreign');
            $table->nullableTimestamps();


            $table->foreign('idReclamo', 'condicion_caucho_idreclamo_foreign')
                ->references('id')->on('reclamo')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
