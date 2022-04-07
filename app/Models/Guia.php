<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    use HasFactory;
    public $table = 'guia';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'codigoSucursalOrigen', 'codigoSucursalDestino', 'idUsuario', 'activo'
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
        'codigo'=>'string',
        'codigoSucursalOrigen'=>'string',
        'codigoSucursalDestino'=> 'string',
        'activo' => 'boolean',
        'idUsuario' => 'integer'
    ];

    /**
     * Get the SucursalOrigen that owns the Reclamo.
     */
    public function sucursalOrigen() {
        return $this->belongsTo(Sucursal::class, 'codigoSucursalOrigen', 'codigo');
    }
        /**
     * Get the SucursalDestino that owns the Reclamo.
     */
    public function sucursalDestino() {
        return $this->belongsTo(Sucursal::class, 'codigoSucursalDestino', 'codigo');
    }

     /**
     * Get the estados_reclamo for the reclamo.
     */
    public function ListGuiaReclamo() {
        return $this->hasMany(GuiaReclamo::class, 'idGuia', 'id');
    }
    public function GuiaReclamo() {
        return $this->hasMany(GuiaReclamo::class, 'idGuia', 'id')->where('activo', true);
    }

}
