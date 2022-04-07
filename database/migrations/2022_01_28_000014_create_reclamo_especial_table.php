<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamoEspecialTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'reclamo_especial';

    /**
     * Run the migrations.
     * @table reclamo_especial
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idReclamo');
            $table->string('descripcion');
            $table->string('observacion');
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->unsignedBigInteger('idUsuario');

            $table->index(["idReclamo"], 'idReclamo');
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
