<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EstadoPedido extends Model
{
    protected $table = 'estado_pedido'; 
    protected $primaryKey = 'id_estado_pedido'; 
    public $timestamps = false; 
    protected $fillable = [
        'nombre_estado'
    ];
    public function pedido(): HasMany
    { 
    return $this->hasMany(Pedido::class); 
    } 
}
