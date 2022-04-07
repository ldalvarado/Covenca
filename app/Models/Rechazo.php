<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rechazo extends Model
{
    use HasFactory;
    public $table = 'rechazo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'idZona', 'descripcion','procede', 'idUsuario', 'activo'
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
        'idZona'=>'string',
        'descripcion'=> 'string',
        'procede' => 'boolean',
        'idUsuario' => 'integer',
        'activo' => 'boolean'
    ];

    /**
     * Get the SucursalOrigen that owns the Reclamo.
     */
    public function getZona() {
        return $this->belongsTo(Zona::class, 'idZona', 'id');
    }


     /**
     * Get the estados_reclamo for the reclamo.
     */
    public function ListCausa() {
        return $this->hasMany(RechazoCausa::class, 'idRechazo', 'id');
    }
    public function ListRecomendacion() {
        return $this->hasMany(RechazoRecomendacion::class, 'idRechazo', 'id');
    }

}
