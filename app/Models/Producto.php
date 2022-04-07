<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public $table = 'producto';

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
    public function scopeDiagrama(){
        return $this -> hasManyThrough(
            DiagramaCaucho::class,
            TipoDiagrama::class,
            'idProducto', // Foreign key on the environments table...
            'idTipoDiagrama', // Foreign key on the deployments table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        )->get();
    }
    public function scopeTipoDiagrama(){
        return $this -> HasOne(TipoDiagrama::class,'idProducto');
    }
    public function getCondicion() {
        return $this->hasMany(Condicion::class, 'id', 'idProduct');
    }
    public function DatosCampos(){
        return $this -> HasOne(DatosCampos::class,'idProducto', 'id');
    }
}
