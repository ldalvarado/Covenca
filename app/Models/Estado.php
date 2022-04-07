<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    public $table = 'estado';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 'activo', 'idUsuario'
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
        'descripcion' => 'string',
        'activo' => 'boolean',
        'idUsuario' => 'integer',
    ];

        /**
     * Get the reclamos for the estado.
     */
    public function reclamos() {
        return $this->hasMany(Reclamo::class, 'id', 'idEstado');
    }
}
