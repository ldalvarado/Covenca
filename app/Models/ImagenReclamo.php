<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenReclamo extends Model
{
    use HasFactory;

    public $table = 'imagen_reclamo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo', 'urlImagen', 'descripcionImagen', 'activo', 'idUsuario', 'imagen64'
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'activo' => true,
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
        'urlImagen' => 'string',
        'descripcionImagen' => 'string',
        'activo' => 'boolean',
        'idUsuario' => 'integer',
        'imagen64' => 'string'
    ];
}
