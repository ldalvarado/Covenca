<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReclamoEspecial extends Model
{
    use HasFactory;

    public $table = 'reclamo_especial';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo', 'descripcion', 'observacion', 'estado', 'idUsuario', 'activo'
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
        'descripcion'=> 'string',
        'observacion'=> 'string',
        'estado'=> 'integer',
        'activo'=> 'string',
        'idUsuario' => 'integer',
    ];

        /**
     * Get the Estado that owns the Reclamo.
     */
    public function reclamo() {
        return $this->belongsTo(Reclamo::class, 'idReclamo', 'id');
    }
            /**
     * Get the Usuario that owns the Reclamo.
     */
    public function usuario() {
        return $this->belongsTo( User::class, 'idUsuario', 'id');
    }

}
