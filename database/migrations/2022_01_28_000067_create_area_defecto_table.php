<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaDefectoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'area_defecto';

    /**
     * Run the migrations.
     * @table area_defecto
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idDiagrama');
            $table->string('descripcion', 100);
            $table->tinyInteger('activo');
            $table->tinyInteger('estado')->default('1');
            $table->string('idUsuario', 191);

            $table->index(["idDiagrama"], 'idDiagrama');
            $table->nullableTimestamps();


            $table->foreign('idDiagrama', 'idDiagrama')
                ->references('id')->on('diagrama_area_defecto')
                ->onDelete('restrict')
                ->onUpdate('cascade');
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
