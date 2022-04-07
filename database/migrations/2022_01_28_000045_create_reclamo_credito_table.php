<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamoCreditoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'reclamo_credito';

    /**
     * Run the migrations.
     * @table reclamo_credito
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idReclamo');
            $table->string('codigo', 191)->nullable()->default(null);
            $table->string('codigoControl', 191)->nullable()->default(null);
            $table->text('montoPagar')->nullable()->default(null);
            $table->double('precioVenta');
            $table->bigInteger('porcentaje');
            $table->unsignedBigInteger('idUsuario');
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');

            $table->index(["idReclamo"], 'idReclamo');
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
