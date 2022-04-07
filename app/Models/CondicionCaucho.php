<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondicionCaucho extends Model
{
    use HasFactory;

    public $table = 'condicion_caucho';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo', 'reparacionesTerceros', 'danioTalones', 'bandaRodamiento', 'etiquetaProduccion', 'dotSerial', 'renovacionMayor', 'activo', 'idUsuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	
    ];

    /*        
    'condicion_caucho'('id', 'idReclamo', 'reparacionesTerceros', 'danioTalones', 'bandaRodamiento', 'etiquetaProduccion', 'dotSerial', 'renovacionMayor', 'activo', 'idUsuario',*/
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'idReclamo' => 'integer',
        'reparacionesTerceros' => 'boolean',
        'danioTalones' => 'boolean',
        'bandaRodamiento' => 'boolean',
        'etiquetaProduccion' => 'boolean',
        'dotSerial' => 'boolean',
        'renovacionMayor' => 'boolean',
        'activo' => 'boolean',
        'idUsuario' => 'integer'
    ];

}
