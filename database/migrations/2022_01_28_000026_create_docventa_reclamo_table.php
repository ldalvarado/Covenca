<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocventaReclamoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'docventa_reclamo';

    /**
     * Run the migrations.
     * @table docventa_reclamo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedBigInteger('idReclamo');
            $table->unsignedBigInteger('idSucursal');
            $table->string('NumedoD', 20);
            $table->string('CodItem', 100);
            $table->string('descripcion', 100);
            $table->decimal('cantidad', 28, 4);
            $table->decimal('TotalItem', 28, 4);
            $table->decimal('Costo', 28, 4);
            $table->decimal('Precio', 28, 4);
            $table->decimal('MtoTax', 28, 4);
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
