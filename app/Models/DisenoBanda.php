<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisenoBanda extends Model
{
    use HasFactory;

    public $table = 'diseno_banda';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idAplicacion','urlImagen','descripcion', 'activo', 'idUsuario','estado','esFrio'
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
        'idAplicacion' => 'integer',
        'urlImagen' => 'string',
        'descripcion' => 'string',
        'activo' => 'boolean',
        'idUsuario' => 'integer',
        'estado'=> 'integer',
        'esFrio'=> 'boolean'
    ];

    public function ListProfundidad() {
        return $this->hasMany(DisenoProfundidad::class, 'idDiseno', 'id');
    }
    public function ListDisenoAncho() {
        return $this->hasMany(DisenoAncho::class, 'idDiseno', 'id');
    }
}
