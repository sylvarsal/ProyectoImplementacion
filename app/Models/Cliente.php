<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'id_cliente';
    public $timestamps = false;
    protected $fillable = [
        'nombre_pila',
        'primer_apellido',
        'segundo_apellido',
        'telefono'
    ];
    public function detallePedido(): HasMany 
    { 
    return $this->hasMany(DetallePedido::class); 
    } 
}
