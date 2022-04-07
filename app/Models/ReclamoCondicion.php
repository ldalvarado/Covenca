<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReclamoCondicion extends Model
{
    use HasFactory;

    public $table = 'reclamo_condicion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idCondicion', 'idReclamo', 'respuesta', 'activo', 'idUsuario'
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
        'idCondicion' => 'integer',
        'idReclamo' => 'integer',
        'respuesta'=> 'string',        
        'activo' => 'boolean',
        'idUsuario' => 'integer',
    ];

   
    public function Condicion() {
        return $this->belongsTo(Condicion::class, 'idCondicion', 'id');
    }
    public function usuario() {
        return $this->belongsTo(User::class, 'idUsuario', 'id');
    }
}
