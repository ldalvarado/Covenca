<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditoReclamo extends Model
{
    use HasFactory;

    public $table = 'reclamo_credito';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo','codigo','codigoControl','montoPagar','precioVenta','porcentaje','idUsuario'
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
        'idReclamo' => 'integer',
        'codigo' => 'string',
        'codigoControl'=> 'string',
        'porcentaje'=> 'double',
        'montoPagar'=> 'double',
        'precioVenta'=> 'double',
        'idUsuario' => 'integer'
    ];

        /**
     * Get the Estado that owns the Reclamo.
     */
    public function reclamo() {
        return $this->belongsTo(Reclamo::class, 'idReclamo', 'id');
    }
            /**
     * Get the Usuario that owns the Reclamo.
     */
    public function usuario() {
        return $this->belongsTo( User::class, 'idUsuario', 'id');
    }

}
