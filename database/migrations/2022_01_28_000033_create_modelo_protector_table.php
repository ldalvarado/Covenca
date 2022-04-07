<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeloProtectorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'modelo_protector';

    /**
     * Run the migrations.
     * @table modelo_protector
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idMarca');
            $table->string('descripcion', 40);
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->unsignedBigInteger('idUsuario');

            $table->unique(["descripcion"], 'modelo_protector_descripcion_unique');

            $table->index(["idMarca"], 'modelo_protector_idmarca_foreign');
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
