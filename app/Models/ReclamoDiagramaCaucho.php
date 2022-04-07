<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReclamoDiagramaCaucho extends Model
{
    use HasFactory;

    public $table = 'reclamo_diagrama_caucho';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','idReclamo', 'idDiagrama','posicion', 'contenido', 'activo', 'idUsuario'
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
        'id' => 'integer',
        'idReclamo' => 'integer',
        'idDiagrama' => 'integer',
        'posicion'=> 'string',    
        'contenido' => 'string',    
        'activo' => 'boolean',
        'idUsuario' => 'integer',
    ];

   


}
