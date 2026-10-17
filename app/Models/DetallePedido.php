<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetallePedido extends Model
{
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
