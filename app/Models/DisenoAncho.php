<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisenoAncho extends Model
{
    use HasFactory;

    public $table = 'diseno_ancho';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idDiseno','idAncho', 'activo', 'idUsuario','estado','idProfundidad'
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
        'idDiseno' => 'integer',
        'idAncho' => 'integer',
        'estado' => 'integer',
        'activo' => 'boolean',
        'idUsuario' => 'integer',
        'idProfundidad' =>'integer'
    ];

    public function Profundidad() {
        return $this->belongsTo(Profundidad::class, 'idProfundidad', 'id');
    }
    public function Ancho() {
        return $this->belongsTo(AnchoDiseno::class, 'idAncho', 'id');
    }
    public function Diseno() {
        return $this->belongsTo(DisenoBanda::class, 'idDiseno', 'id');
    }
}
