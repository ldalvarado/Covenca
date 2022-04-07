<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDiagrama extends Model
{
    use HasFactory;

    public $table = 'tipo_diagrama';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idProducto','descripcion', 'activo', 'idUsuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	
    ];
    public function scopeProducto() {
        return $this->belongsTo(Producto::class, 'idProducto', 'id');
    }
    public function scopeDiagram(){
        return $this->hasMany (DiagramaCaucho::class,'id','idTipoDiagrama');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'idProducto'=>'integer',
   
        'descripcion' => 'string',

        'activo' => 'boolean',
        'idUsuario' => 'integer',
    ];
}
