<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjeVehiculoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'eje_vehiculo';

    /**
     * Run the migrations.
     * @table eje_vehiculo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('descripcion', 40);
            $table->tinyInteger('activo');
            $table->tinyInteger('estado')->default('1');
            $table->integer('idUsuario');

            $table->unique(["descripcion"], 'eje_vehiculo_descripcion_unique');
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
