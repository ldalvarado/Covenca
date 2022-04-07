<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamoCompraTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'reclamo_compra';

    /**
     * Run the migrations.
     * @table reclamo_compra
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idReclamo');
            $table->string('NumeroD', 20);
            $table->dateTime('Fecha');
            $table->string('CodProv', 20);
            $table->string('Descrip', 50);
            $table->string('Direc1', 50);
            $table->decimal('Monto', 20, 0);
            $table->decimal('MtoTax', 20, 0);
            $table->decimal('TExento', 20, 0);
            $table->tinyInteger('activo')->default('1');
            $table->tinyInteger('estado')->default('1');
            $table->unsignedBigInteger('idUsuario');
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
