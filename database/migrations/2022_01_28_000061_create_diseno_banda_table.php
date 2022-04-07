<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisenoBandaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'diseno_banda';

    /**
     * Run the migrations.
     * @table diseno_banda
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('idAplicacion');
            $table->string('descripcion', 191);
            $table->string('urlImagen', 191);
            $table->tinyInteger('activo');
            $table->tinyInteger('estado');
            $table->integer('idUsuario');
            $table->tinyInteger('esFrio')->nullable()->default(null);

            $table->index(["idAplicacion"], 'idAplicacion');
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
