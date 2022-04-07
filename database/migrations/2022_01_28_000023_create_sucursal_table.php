<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sucursal';

    /**
     * Run the migrations.
     * @table sucursal
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
            $table->tinyInteger('principal')->default('0');
            $table->string('direccion')->nullable()->default(null);
            $table->string('correo', 100)->nullable()->default(null);
            $table->string('telefono', 25)->nullable()->default(null);
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->string('servidor', 100)->nullable()->default(null);
            $table->string('puerto', 100)->nullable()->default(null);
            $table->string('bd', 100)->nullable()->default(null);
            $table->string('usuario', 100)->nullable()->default(null);
            $table->string('clave', 100)->nullable()->default(null);
            $table->unsignedBigInteger('idUsuario');
            $table->string('rif', 191)->nullable()->default(null);

            $table->unique(["descripcion"], 'sucursal_descripcion_unique');
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
