<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteCarcasa extends Model
{
    use HasFactory;

    public $table = 'cliente_carcasa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idCarcasa','idCliente'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	
    ];
    public function Cliente() {
        return $this->belongsTo(User::class, 'idCliente', 'id');
    }
}
