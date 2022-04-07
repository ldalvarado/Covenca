<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamoAnalisisTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'reclamo_analisis';

    /**
     * Run the migrations.
     * @table reclamo_analisis
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idReclamo');
            $table->unsignedBigInteger('idRechazo');
            $table->bigInteger('profundidadActual')->nullable()->default(null);
            $table->bigInteger('porcentaje')->nullable()->default(null);
            $table->string('descripcion', 191)->nullable()->default(null);
            $table->text('imagenFalla')->nullable()->default(null);
            $table->unsignedBigInteger('idUsuario');
            $table->tinyInteger('ajusteComercial')->nullable()->default('0');
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->index(["idReclamo"], 'idReclamo');

            $table->index(["idRechazo"], 'idRechazo');
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
