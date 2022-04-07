<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagramaCaucho extends Model
{
    use HasFactory;

    public $table = 'diagrama_caucho';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idTipoDiagrama','codigo','descripcion','contenido', 'activo', 'idUsuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	
    ];
    public function scopeTipoDiagrama() {
        return $this->belongsTo(TipoDiagrama::class, 'idTipoDiagrama', 'id');
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'idTipoDiagrama'=>'integer',
        'codigo'=>'string',
        'descripcion' => 'string',
        'contenido' => 'string',
        'activo' => 'boolean',
        'idUsuario' => 'integer',
    ];
}
