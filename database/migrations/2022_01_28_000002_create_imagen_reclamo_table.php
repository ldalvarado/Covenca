<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenReclamoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'imagen_reclamo';

    /**
     * Run the migrations.
     * @table imagen_reclamo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idReclamo');
            $table->string('urlImagen');
            $table->string('descripcionImagen');
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->unsignedBigInteger('idUsuario');
           /// $table->binary('imagen64');

            $table->index(["idReclamo"], 'imagen_reclamo_idreclamo_foreign');
            $table->nullableTimestamps();
        });
        DB::statement("ALTER TABLE ".$this->tableName." ADD imagen64 LONGBLOB");
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
