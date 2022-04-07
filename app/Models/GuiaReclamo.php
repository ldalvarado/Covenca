<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuiaReclamo extends Model
{
    use HasFactory;

    public $table = 'guia_reclamo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idReclamo', 'idGuia',  'idUsuario', 'activo'
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
        'idGuia'=> 'integer',
        'idUsuario' => 'integer',
        'activo' => 'boolean'

    ];

        /**
     * Get the Estado that owns the Reclamo.
     */
    public function reclamo() {
        return $this->belongsTo(Reclamo::class, 'idReclamo', 'id');
    }
    
    public function guia() {
        return $this->belongsTo(Guia::class, 'idGuia', 'id');
    }

            /**
     * Get the Usuario that owns the Reclamo.
     */
    public function usuario() {
        return $this->belongsTo( User::class, 'idUsuario', 'id');
    }

}
