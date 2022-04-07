<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocventaReclamo extends Model
{
    use HasFactory;
    public $table = 'docventa_reclamo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo','idSucursal','NumedoD','CodItem','descripcion','cantidad','TotalItem','Costo','Precio','MtoTax','activo'
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
        'idReclamo'=>'integer',
        'idSucursal'=>'integer',
        'NumedoD'=>'string',
        'CodItem'=>'string',
        'descripcion'=>'string',
        'cantidad'=>'double',
        'TotalItem'=>'double',
        'Costo'=>'double',
        'Precio'=>'double',
        'MtoTax'=>'double',
        'activo'=>'boolean'
    ];


    public function Reclamo() {
        return $this->belongsTo(Reclamo::class, 'idReclamo', 'id');
    }

    public function Sucursal() {
        return $this->belongsTo(Sucursal::class, 'idSucursal', 'id');
    }
}
