<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosCampos extends Model
{
    use HasFactory;

    public $table = 'datoscampos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idProducto','descripcion', 'serial','boleta', 'tipo_renovado','profundidad','diseno','medida','modelo','marca','dotSerial' , 'activo', 'idUsuario'
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
        'idProducto'=>'integer',
        'descripcion' => 'string',
        'serial'=> 'integer',
        'boleta' => 'integer',
        'tipo_renovado'=> 'integer',
        'profundidad'=> 'integer',
        'diseno'=> 'integer',
        'medida'=> 'integer',
        'modelo'=> 'integer',
        'marca'=> 'integer',
        'dotSerial' => 'integer',        
        'profundidad' => 'string',
        'activo' => 'boolean',
        'idUsuario' => 'integer',
    ];
}
