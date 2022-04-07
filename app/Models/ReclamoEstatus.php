<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReclamoEstatus extends Model
{
    use HasFactory;

    public $table = 'reclamo_estatus';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo', 'idEstatus', 'observacion', 'activo', 'idUsuario'
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
        'idEstatus'=> 'integer',
        'observacion' => 'string',
        'activo' => 'boolean',
        'idUsuario' => 'integer',
    ];

        /**
     * Get the Estado that owns the Reclamo.
     */
    public function getEstatus() {
        return $this->belongsTo(Estatus::class, 'idEstatus', 'id');
    }

}
