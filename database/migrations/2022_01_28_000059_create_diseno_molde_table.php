<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisenoMoldeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'diseno_molde';

    /**
     * Run the migrations.
     * @table diseno_molde
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('descripcion', 40);
            $table->string('profundidad', 40);
            $table->tinyInteger('activo');
            $table->tinyInteger('estado')->default('1');
            $table->integer('idUsuario');

            $table->unique(["descripcion"], 'diseno_molde_descripcion_unique');
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
