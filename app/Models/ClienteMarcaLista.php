<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteMarcaLista extends Model
{
    use HasFactory;

    public $table = 'cliente_marca_lista';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idMarca'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	
    ];
    public function Marca(){
        return $this->HasOne(MarcaCaucho::class, 'id', 'idMarca')->get();
    }

    
    
}
