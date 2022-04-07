<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefectoEnvelopExternoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'defecto_envelop_externo';

    /**
     * Run the migrations.
     * @table defecto_envelop_externo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('codigo', 10);
            $table->string('descripcion', 100);
            $table->tinyInteger('procede')->default('0');
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->integer('idUsuario');
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
