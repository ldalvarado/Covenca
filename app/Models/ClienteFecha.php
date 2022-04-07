<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteFecha extends Model
{
    use HasFactory;

    public $table = 'cliente_fecha';

    protected $fillable = [
        'idCliente','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'
    ];
    protected $casts = [
        'enero' => 'boolean',
        'febrero' => 'boolean',
        'marzo' => 'boolean',
        'abril' => 'boolean',
        'mayo' => 'boolean',
        'junio' => 'boolean',
        'julio' => 'boolean',
        'agosto' => 'boolean',
        'septiembre' => 'boolean',
        'octubre' => 'boolean',
        'noviembre' => 'boolean',

        'diciembre' => 'boolean',
    
    ];

    
    
}
