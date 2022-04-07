<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdfReclamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $tableName = 'pdf_reclamo';

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
            $table->string('urlpdf');
            $table->string('descripcionImagen');
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->unsignedBigInteger('idUsuario');
            //$table->binary('pdf64');

            $table->index(["idReclamo"], 'imagen_reclamo_idreclamo_foreign');
            $table->nullableTimestamps();
        });
        DB::statement("ALTER TABLE ".$this->tableName." ADD pdf64 LONGBLOB");
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pdf_reclamo');
    }
}
