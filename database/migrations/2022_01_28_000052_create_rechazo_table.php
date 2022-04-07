<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRechazoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'rechazo';

    /**
     * Run the migrations.
     * @table rechazo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('codigo', 40);
            $table->unsignedBigInteger('idZona');
            $table->string('descripcion', 120);
            $table->tinyInteger('procede');
            $table->tinyInteger('activo');
            $table->tinyInteger('estado')->default('1');
            $table->integer('idUsuario');

            $table->index(["idZona"], 'idZona');
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
