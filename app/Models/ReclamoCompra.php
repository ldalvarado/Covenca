<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReclamoCompra extends Model
{
    use HasFactory;

    public $table = 'reclamo_compra';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo', 'NumeroD', 
        'Fecha', 'CodProv', 'Descrip',
        'Monto','MtoTax','TExento', 'idUsuario', 'activo','Direc1'
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
        'NumeroD'=> 'string',
        'Fecha'=> 'date',
        'CodProv'=> 'string',
        'Descrip'=> 'string',
        'Monto'=> 'double',
        'MtoTax' => 'double',
        'TExento' => 'double',
        'idUsuario' => 'integer',
        'activo' => 'boolean',
        'Direc1' => 'string',
    ];

        /**
     * Get the Estado that owns the Reclamo.
     */
    public function reclamo() {
        return $this->belongsTo(Reclamo::class, 'idReclamo', 'id');
    }
    
    public function rechazo() {
        return $this->belongsTo(Rechazo::class, 'idRechazo', 'id');
    }

            /**
     * Get the Usuario that owns the Reclamo.
     */
    public function usuario() {
        return $this->belongsTo( User::class, 'idUsuario', 'id');
    }

}
