<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carcasa extends Model
{
    use HasFactory;

    public $table = 'carcasa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion','EstimacionKm','cantidadA','VidaUtil','MarcasClasificadas','CalidadCarcasa', 'activo', 'idUsuario'
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
        'activo' => 'integer',
        'idUsuario' => 'integer',
    ];
}