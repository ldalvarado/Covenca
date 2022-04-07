<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuiaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'guia';

    /**
     * Run the migrations.
     * @table guia
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('codigo', 10);
            $table->string('codigoSucursalOrigen', 10);
            $table->string('codigoSucursalDestino', 10);
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->unsignedBigInteger('idUsuario');
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
