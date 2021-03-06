<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoDiagramaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tipo_diagrama';

    /**
     * Run the migrations.
     * @table tipo_diagrama
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idProducto');
            $table->string('descripcion', 100);
            $table->tinyInteger('activo');
            $table->tinyInteger('estado')->default('1');
            $table->string('idUsuario', 191);

            $table->unique(["descripcion"], 'tipo_diagrama_descripcion_unique');

            $table->index(["idProducto"], 'tipo_diagrama_idproducto_foreign');
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
