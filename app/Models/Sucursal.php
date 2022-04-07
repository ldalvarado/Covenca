<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    
    public $table = 'sucursal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'descripcion', 'principal', 'direccion','correo','telefono','activo','estado','servidor','puerto','bd','usuario','clave','rif', 'idUsuario'
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
        'codigo' => 'string',
        'descripcion' => 'string',
        'principal' => 'boolean',
        'direccion' => 'string',
        'correo' => 'string',
        'telefono' => 'string',
        'rif' => 'string',
        'activo' => 'boolean',
        'idUsuario' => 'integer'
    ];

    /**
     * Get the reclamos for the sucursal.
     */
    public function reclamos() {
        return $this->hasMany(Reclamo::class, 'id', 'idSucursal');
    }

    public function users() {
        //return $this->hasMany(User::class, 'foreign_key', 'local_key');
        return $this->hasMany(User::class, 'id', 'idSucursal');
    }
}
