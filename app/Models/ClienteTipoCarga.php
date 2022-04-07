<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteTipoCarga extends Model
{
    use HasFactory;

    public $table = 'cliente_tipo_carga';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idCliente','liquido','alimentos','farmacos','pasajeros','construccion','textiles','agricolas','electronicos','otro'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	
    ];
    

    
    
}
