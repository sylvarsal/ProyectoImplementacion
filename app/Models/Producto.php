<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    public function detallePedido(): HasMany 
    { 
    return $this->hasMany(DetallePedido::class); 
    }

    public function estadoProducto(): BelongsTo
    { 
    return $this->belongsTo(EstadoProducto::class); 
    }
}
