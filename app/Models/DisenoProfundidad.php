<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisenoProfundidad extends Model
{
    use HasFactory;

    public $table = 'diseno_profundidad';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idDiseno','idProfundidad', 'activo', 'idUsuario'
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
        'idProfundidad' => 'integer',
        'activo' => 'boolean',
        'idUsuario' => 'integer',
    ];

    public function Profundidad() {
        return $this->belongsTo(Profundidad::class, 'idProfundidad', 'id');
    }
    public function Diseno() {
        return $this->belongsTo(DisenoBanda::class, 'idDiseno', 'id');
    }
}
