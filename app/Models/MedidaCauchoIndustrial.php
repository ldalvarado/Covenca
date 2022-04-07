<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedidaCauchoIndustrial extends Model
{
    use HasFactory;

    public $table = 'medida_caucho_industrial';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomeclatura', 'descripcion', 'activo', 'idUsuario'
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
        'nomeclatura' => 'string',
        'descripcion' => 'string',
        'activo' => 'boolean',
        'idUsuario' => 'integer',
    ];
}
