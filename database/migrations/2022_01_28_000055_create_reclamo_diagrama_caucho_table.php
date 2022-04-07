<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamoDiagramaCauchoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'reclamo_diagrama_caucho';

    /**
     * Run the migrations.
     * @table reclamo_diagrama_caucho
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idReclamo');
            $table->unsignedBigInteger('idDiagrama');
            $table->string('posicion', 40);
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
