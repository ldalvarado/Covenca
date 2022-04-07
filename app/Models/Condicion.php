<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    use HasFactory;

    public $table = 'condicion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idProducto', 'descripcion', 'activo', 'idUsuario', 'respuesta'
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
        'idProducto' => 'integer',
        'descripcion'=> 'string',        
        'activo' => 'boolean',
        'idUsuario' => 'integer',
        'respuesta' => 'boolean',
    ];

        /**
     * Get the Estado that owns the Reclamo.
     */
    public function getProducto() {
        return $this->belongsTo(Producto::class, 'idProducto', 'id');
    }

            /**
     * Get the Usuario that owns the Reclamo.
     */
    public function usuario() {
        return $this->belongsTo( User::class, 'idUsuario', 'id');
    }

}
