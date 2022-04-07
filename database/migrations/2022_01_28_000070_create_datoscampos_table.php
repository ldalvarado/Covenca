<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatoscamposTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'datoscampos';

    /**
     * Run the migrations.
     * @table datoscampos
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
            $table->tinyInteger('serial')->nullable()->default(null);
            $table->tinyInteger('boleta')->nullable()->default(null);
            $table->tinyInteger('tipo_renovado')->nullable()->default(null);
            $table->tinyInteger('profundidad')->nullable()->default(null);
            $table->tinyInteger('diseno')->nullable()->default(null);
            $table->tinyInteger('medida')->nullable()->default(null);
            $table->tinyInteger('modelo')->nullable()->default(null);
            $table->tinyInteger('marca')->nullable()->default(null);
            $table->tinyInteger('dotSerial')->nullable()->default(null);
            $table->tinyInteger('activo');
            $table->tinyInteger('estado')->default('1');
            $table->string('idUsuario', 191);
            $table->tinyInteger('valvula')->nullable()->default(null);
            $table->tinyInteger('fecha_recepcion')->nullable()->default(null);
            $table->tinyInteger('lote_vulcanizacion')->nullable()->default(null);
            $table->tinyInteger('lote_banda')->nullable()->default(null);
            $table->tinyInteger('lote_producto')->nullable()->default(null);
            $table->tinyInteger('pais')->nullable()->default(null);
            $table->tinyInteger('tipo_producto')->nullable()->default(null);
            $table->tinyInteger('descri_prod')->nullable()->default(null);

            $table->index(["idProducto"]);
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
