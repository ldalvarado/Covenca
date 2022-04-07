<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacionProducto extends Model
{
    use HasFactory;
    
    public $table = 'informacion_producto';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo','idProducto', 'idPais', 'idMarcaCaucho', 'idModeloCaucho', 'idMedidaCaucho', 'idDisenoBanda','idProfundidad', 'dotSerial', 'profundidad', 'boleta', 'tipoRenovado', 'serial', 'loteBanda', 'loteVulcanizacion', 'loteProducto','valvula','fechaRecepcion','activo', 'idUsuario'
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
        'descripcion' => 'string',
        'activo' => 'boolean',
        'idPais' => 'integer',
        'idUsuario' => 'integer',
        'idReclamo'=>'integer',
        'idProducto'=>'integer',
        'idMarcaCaucho'=>'integer',
        'idModeloCaucho'=>'integer',
        'idMedidaCaucho'=>'integer',
        'idDisenoBanda'=>'integer',
        'idProfundidad'=>'integer',
        
        'dotSerial'=>'string',
        'profundidad'=>'string',
        'boleta'=>'string',
        'tipoRenovado'=>'boolean',
        'serial'=>'string',
        'loteBanda'=>'string',
        'loteVulcanizacion'=>'string',
        'loteProducto'=>'string',
        'valvula'=>'string',
        'fechaRecepcion'=>'date',
        'activo'=>'boolean',
        'idUsuario'=>'integer'
    ];
        /**
     * Get the marcaCaucho that owns the Reclamo.
     */
    public function marcaCaucho() {
        return $this->belongsTo(MarcaCaucho::class, 'idMarcaCaucho', 'id');
    }
    public function marcaProtector() {
        return $this->belongsTo(MarcaProtector::class, 'idMarcaCaucho', 'id');
    }
    public function marcaCamara() {
        return $this->belongsTo(MarcaCamara::class, 'idMarcaCaucho', 'id');
    }
        /**
     * Get the modelCaucho that owns the Reclamo.
     */
    public function modelCaucho() {
        return $this->belongsTo(ModeloCaucho::class, 'idModeloCaucho', 'id');
    }
            /**
     * Get the MedidaCaucho that owns the Reclamo.
     */
    public function medidaCaucho() {
        return $this->belongsTo(MedidaCaucho::class, 'idMedidaCaucho', 'id');
    }

    public function getProducto() {
        return $this->belongsTo(Producto::class, 'idProducto', 'id');
    }

                /**
     * Get the disenoMolde that owns the Reclamo.
     */
    public function Diseno() {
        return $this->belongsTo(DisenoBanda::class, 'idDisenoBanda', 'id');
    }

    public function Profundidad() {
        return $this->belongsTo(Profundidad::class, 'idProfundidad', 'id');
    }

}
