<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public $table = 'cliente_datos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idUser','subtipo','direccion','telefono','kmFlota','perFlota','nombre', 'doc','contacto','estado','ciudad','idSucursal','renovado','carga','carcasa'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	
    ];
    public function Marcas(){
        return $this->hasMany(ClienteMarca::class, 'idCliente', 'id')->get();
    }
    public function Vehiculos(){
        return $this->hasOne(ClienteVehiculo::class, 'idCliente', 'id')->first();

    }
    public function TipoCarga(){
        return $this->hasOne(ClienteTipoCarga::class, 'idCliente', 'id')->first();

    }
    public function Fecha(){
        return $this->hasOne(ClienteFecha::class, 'idCliente', 'id')->first();

    }
    public function User() {
        return $this->belongsTo(User::class, 'idUser', 'id');
    }
    
}
