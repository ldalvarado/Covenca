<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamoDiagramaAdTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'reclamo_diagrama_ad';

    /**
     * Run the migrations.
     * @table reclamo_diagrama_ad
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idDiagrama');
            $table->unsignedBigInteger('idReclamo');
            $table->string('respuesta', 40);
            $table->tinyInteger('seleccionado');
            $table->text('contenido')->nullable()->default(null);
            $table->tinyInteger('activo');
            $table->tinyInteger('estado')->default('1');
            $table->integer('idUsuario');

            $table->index(["idDiagrama"], 'idDiagrama');

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
