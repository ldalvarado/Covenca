<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisenoAnchoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'diseno_ancho';

    /**
     * Run the migrations.
     * @table diseno_ancho
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('idDiseno');
            $table->bigInteger('idAncho');
            $table->bigInteger('idProfundidad');
            $table->tinyInteger('activo');
            $table->tinyInteger('estado');
            $table->integer('idUsuario');

            $table->index(["idDiseno"], 'idDiseno');

            $table->index(["idAncho"], 'idAncho');

            $table->index(["idProfundidad"], 'idProfundidad');
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
