<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'reclamo';

    /**
     * Run the migrations.
     * @table reclamo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idSucursal');
            $table->unsignedBigInteger('idTipoDiagrama');
            $table->string('factura', 191);
            $table->date('fechaFactura');
            $table->double('precio')->default('0.0000');
            $table->double('iva')->default('0.0000');
            $table->double('mtoTotal')->default('0.0000');
            $table->string('rif', 20);
            $table->string('nombre', 60);
            $table->string('direccion')->nullable()->default(null);
            $table->string('observacion')->nullable()->default(null);
            $table->string('codigoSucursal', 10);
            $table->string('codigoWeb', 25);
            $table->string('codigoLocal', 25);
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->unsignedBigInteger('idUsuario');
            $table->string('email', 191)->nullable()->default(null);
            $table->string('telefono', 191)->nullable()->default(null);

            $table->index(["idSucursal"], 'reclamo_idsucursal_foreign');

            $table->index(["idTipoDiagrama"], 'reclamo_idtipodiagrama_foreign');
            $table->nullableTimestamps();
        });
        DB::statement("ALTER TABLE `reclamo` ADD `idReclamoLocal` BIGINT(20) NULL DEFAULT '0' AFTER `id`;");

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
