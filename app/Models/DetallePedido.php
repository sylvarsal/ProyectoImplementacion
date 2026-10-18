<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetallePedido extends Model
{
    protected $table = 'detalle_pedido';
    protected $primaryKey = 'id_detalle_pedido';
    public $timestamps = false;
    protected $fillable = [
        'id_pedido',
        'id_producto',
        'id_cliente',
        'cantidad',
        'precio_individual',
        'subtotal'
    ];
    public function producto(): BelongsTo 
    { 
    return $this->belongsTo(Producto::class); 
    } 

    public function pedido(): BelongsTo 
    { 
    return $this->belongsTo(Pedido::class);
    }

    public function cliente(): BelongsTo 
    { 
    return $this->belongsTo(Cliente::class);
    }
}
