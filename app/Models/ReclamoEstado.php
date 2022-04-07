<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReclamoEstado extends Model
{
    use HasFactory;

    public $table = 'reclamo_estado';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo', 'idEstado', 'observacion', 'activo', 'idUsuario'
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
        'idEstado'=> 'integer',
        'observacion' => 'string',
        'activo' => 'boolean',
        'idUsuario' => 'integer',
    ];

        /**
     * Get the Estado that owns the Reclamo.
     */
    public function getEstado() {
        return $this->belongsTo(Estado::class, 'idEstado', 'id');
    }

            /**
     * Get the Usuario that owns the Reclamo.
     */
    public function usuario() {
        return $this->belongsTo( User::class, 'idUsuario', 'id');
    }

}
