<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondicionVehiculo extends Model
{
    use HasFactory;

    public $table = 'condicion_vehiculo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo', 'idTipoVehiculo', 'idMarca', 'idModelo', 'idCargaVehiculo', 'idTipoCargaVehiculo', 'idEjeVehiculo', 'kilometraje', 'anchoRin', 'psi', 'activo', 'idUsuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'idReclamo' => 'integer',
        'idTipoVehiculo'=> 'integer',
        'idMarca'=> 'integer',
        'idModelo'=> 'integer',
        'idCargaVehiculo'=> 'integer',
        'idTipoCargaVehiculo'=> 'integer',
        'idEjeVehiculo'=> 'integer',
        'kilometraje'=> 'double',
        'anchoRin'=> 'integer',
        'psi'=> 'integer',
        'activo'=> 'boolean',
        'idUsuario'=> 'integer',
    ];

    public function MarcaVehiculo() {
        return $this->HasOne(MarcaVehiculo::class, 'id', 'idMarca');
    }

    public function ModeloVehiculo() {
        return $this->HasOne(ModeloVehiculo::class, 'id', 'idModelo');
    }

    public function CargaVehiculo() {
        return $this->HasOne(CargaVehiculo::class, 'id', 'idCargaVehiculo');
    }

    public function TipoCargaVehiculo() {
        return $this->HasOne(TipoCargaVehiculo::class, 'id', 'idTipoCargaVehiculo');
    }

    public function TipoVehiculo() {
        return $this->HasOne(TipoVehiculo::class, 'id', 'idTipoVehiculo');
    }

}
