<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisReclamo extends Model
{
    use HasFactory;

    public $table = 'reclamo_analisis';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo', 'idRechazo', 
        'profundidadActual', 'porcentaje', 'descripcion',
        'ajusteComercial', 'idUsuario', 'activo'
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
        'idRechazo'=> 'integer',
        'profundidadActual'=> 'integer',
        'porcentaje'=> 'integer',
        'descripcion'=> 'string',
        'ajusteComercial'=> 'boolean',
        'idUsuario' => 'integer',
        'activo' => 'boolean'
    ];

        /**
     * Get the Estado that owns the Reclamo.
     */
    public function reclamo() {
        return $this->belongsTo(Reclamo::class, 'idReclamo', 'id');
    }
    
    public function rechazo() {
        return $this->belongsTo(Rechazo::class, 'idRechazo', 'id');
    }

            /**
     * Get the Usuario that owns the Reclamo.
     */
    public function usuario() {
        return $this->belongsTo( User::class, 'idUsuario', 'id');
    }

}
