<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloCaucho extends Model
{
    use HasFactory;

    public $table = 'modelo_caucho';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 'activo', 'idUsuario','idMarca'
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
        'idMarca' => 'integer'
    ];
    public function marca() {
        return $this->belongsTo(MarcaCaucho::class, 'idMarca', 'id');
    }
}
