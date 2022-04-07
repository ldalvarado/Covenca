<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReclamoDiagramaAD extends Model
{
    use HasFactory;

    public $table = 'reclamo_diagrama_ad';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo'    ,
        'idDiagrama'   ,    'respuesta'    ,      'seleccionado' ,        'contenido'    ,
        'activo'       ,     'idUsuario'    ,];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array2
     */
    protected $hidden = [
    	
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'idReclamo'          => 'integer',
        'idDiagrama'    => 'integer',
        'respuesta'      => 'string',  
        'seleccionado'      =>'string',  
        'contenido'      => 'integer',    
        'activo'         => 'boolean',
        'idUsuario'      => 'integer',
    ];

   


}
