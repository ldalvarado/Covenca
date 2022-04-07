<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RechazoRecomendacion extends Model
{
    use HasFactory;
    public $table = 'rechazo_recomendacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idRechazo', 'descripcion','activo','idUsuario'
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
        'idRechazo'=>'integer',
        'descripcion'=>'string',
        'activo' => 'boolean',
        'idUsuario' => 'integer'
    ];


    public function ListRechazo() {
        return $this->belongsTo(Rechazo::class, 'idRechazo', 'id');
    }


}
