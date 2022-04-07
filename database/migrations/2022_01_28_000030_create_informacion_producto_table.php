<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacionProductoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'informacion_producto';

    /**
     * Run the migrations.
     * @table informacion_producto
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idReclamo');
            $table->unsignedBigInteger('idProducto');
            $table->unsignedBigInteger('idPais')->nullable()->default(null);
            $table->unsignedBigInteger('idMarcaCaucho')->nullable()->default(null);
            $table->unsignedBigInteger('idModeloCaucho')->nullable()->default(null);
            $table->unsignedBigInteger('idMedidaCaucho')->nullable()->default(null);
            $table->bigInteger('idDisenoBanda')->nullable()->default(null);
            $table->bigInteger('idProfundidad')->nullable()->default(null);
            $table->string('dotSerial')->nullable()->default(null);
            $table->string('profundidad', 50)->nullable()->default(null);
            $table->string('boleta', 50)->nullable()->default(null);
            $table->tinyInteger('tipoRenovado')->nullable()->default('1');
            $table->string('serial', 50)->nullable()->default(null);
            $table->string('loteBanda', 50)->nullable()->default(null);
            $table->string('loteVulcanizacion')->nullable()->default(null);
            $table->string('loteProducto')->nullable()->default(null);
            $table->string('valvula', 191)->nullable()->default(null);
            $table->timestamp('fechaRecepcion')->nullable()->default(null);
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->unsignedBigInteger('idUsuario');

            $table->unique(["boleta"], 'boleta');

            $table->index(["idReclamo"], 'informacion_producto_idreclamo_foreign');

            $table->index(["idProducto"], 'informacion_producto_idproducto_foreign');

            $table->index(["idMarcaCaucho"], 'informacion_producto_idmarcacaucho_foreign');

            $table->index(["idModeloCaucho"], 'informacion_producto_idmodelocaucho_foreign');

            $table->index(["idMedidaCaucho"], 'informacion_producto_idmedidacaucho_foreign');

            $table->index(["idDisenoBanda"], 'informacion_producto_iddisenobanda_foreign');

            $table->index(["idProfundidad"], 'informacion_producto_idprofundidad');
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
