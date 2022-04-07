<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamoCondicionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'reclamo_condicion';

    /**
     * Run the migrations.
     * @table reclamo_condicion
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idCondicion');
            $table->unsignedBigInteger('idReclamo');
            $table->string('respuesta', 250);
            $table->tinyInteger('activo');
            $table->tinyInteger('estado')->default('1');
            $table->string('idUsuario', 191);

            $table->index(["idCondicion"], 'reclamo_condicion_idcondicion_foreign');

            $table->index(["idReclamo"], 'reclamo_condicion_idreclamo_foreign');
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
