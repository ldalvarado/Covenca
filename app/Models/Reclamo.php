<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    use HasFactory;
    public $table = 'reclamo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idEstatus','idTipoDiagrama', 'idSucursal', 'factura', 'fechaFactura', 'precio', 'iva', 'mtoTotal', 'rif', 'nombre', 'direccion', 'observacion', 'codigoSucursal', 'codigoWeb', 'codigoLocal', 'activo', 'idUsuario'
        ,'email','telefono'
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
        'idSucursal'=>'integer',
        'idTipoDiagrama'=>'integer',       
        'factura'=> 'string',
        'fechaFactura'=> 'date',
        'precio'=>'double',
        'iva'=>'double',
        'mtoTotal'=>'double',
        'rif'=> 'string',
        'nombre' => 'string',
        'direccion'=> 'string',
        'observacion'=> 'string',
        'codigoSucursal'=> 'string',
        'codigoWeb'=> 'string',
        'codigoLocal'=> 'string',
        'activo' => 'boolean',
        'idUsuario' => 'integer',
        'email'=>'string',
        'telefono' =>'string'
    ];

    /**
     * Get the Sucursal that owns the Reclamo.
     */
    public function sucursal() {
        return $this->belongsTo(Sucursal::class, 'idSucursal', 'id');
    }

     /**
     * Get the estados_reclamo for the reclamo.
     */
    public function ListEstadosReclamo() {
        return $this->hasMany(ReclamoEstado::class, 'idReclamo', 'id');
    }
    public function getUltimoEstado() {
        return $this->hasMany(ReclamoEstado::class, 'idReclamo', 'id')->where('idEstado', 6);
    }
    public function ListEstatusReclamo() {
        return $this->hasMany(ReclamoEstatus::class, 'idReclamo', 'id');
    }

    public function Condiciones() {
        return $this->hasMany(ReclamoCondicion::class, 'idReclamo', 'id');
    }
    public function CondicionesSucursal() {
        return $this->hasMany(ReclamoCondicion::class, 'idReclamo', 'id')->where();
    }
    public function CondicionesAnalisis() {
        return $this->hasMany(ReclamoCondicion::class, 'idReclamo', 'id');
    }

    public function estadoReclamo() {
        return $this->hasMany(ReclamoEstado::class, 'idReclamo', 'id')->where('activo', true);
    }
    public function getEspecialReclamo($idEstado = 2) {
        return $this->hasOne(ReclamoEstado::class, 'idReclamo', 'id')->where('idEstado', $idEstado)->where('activo', false);
    }
    public function getEspecial($idEstado = 2) {
        return $this->hasOne(ReclamoEstado::class, 'idReclamo', 'id')->where('idEstado', $idEstado)->where('activo', true);
    }
    public function getRecepcionReclamo($idEstado = 3) {
        return $this->hasOne(ReclamoEstado::class, 'idReclamo', 'id')->where('idEstado', $idEstado)->where('activo', false);
    }
    public function getAnalisisReclamo($idEstado = 4) {
        return $this->hasOne(ReclamoEstado::class, 'idReclamo', 'id')->where('idEstado', $idEstado)->where('activo', false);
    }
    public function getCreditoReclamo($idEstado = 5) {
        return $this->hasOne(ReclamoEstado::class, 'idReclamo', 'id')->where('idEstado', $idEstado)->where('activo', false);
    }
    public function estatusReclamo() {
        return $this->hasMany(ReclamoEstatus::class, 'idReclamo', 'id')->where('activo', true);
    }
    public function ImagenReclamoSucursal() {
        return $this->hasOne(ImagenReclamo::class, 'idReclamo', 'id');
    }

    public function ImagenReclamo() {
        return $this->hasOne(ImagenReclamo::class, 'idReclamo', 'id')->latest();
    }
    public function PdfReclamo(){
        return $this->hasOne(PdfReclamo::class, 'idReclamo', 'id')->latest();

    }
    public function InfoProductoSucursal() {
        return $this->hasOne(InformacionProducto::class, 'idReclamo', 'id');
    }
    public function InfoProductoAnalisis() {
        return $this->hasOne(InformacionProducto::class, 'idReclamo', 'id')->latest();
    }
    public function DocVenta() {
        return $this->HasOne(DocventaReclamo::class, 'idReclamo', 'id');
    }
    public function DiagramaCaucho() {
        return $this->HasOne(ReclamoDiagramaCaucho::class, 'idReclamo', 'id');
    }
    
    public function CreditoReclamo() {
        return $this->HasOne(CreditoReclamo::class, 'idReclamo', 'id');
    }
    
    public function CondicionVehiculo() {
        return $this->HasOne(CondicionVehiculo::class, 'idReclamo', 'id');
    }
    
    public function usuario() {
        return $this->belongsTo(User::class, 'idUsuario', 'id');
    }

    public function Analisis() {
        return $this->HasOne(AnalisisReclamo::class, 'idReclamo', 'id');
    }

    public function Especial() {
        return $this->HasOne(ReclamoEspecial::class, 'idReclamo', 'id');
    }
    public function GuiaReclamo() {
        return $this->HasOne(GuiaReclamo::class, 'idReclamo', 'id');
    }
    public function  ReclamoCompra() {
        return $this->hasOne(ReclamoCompra::class, 'idReclamo', 'id');
    }
}
