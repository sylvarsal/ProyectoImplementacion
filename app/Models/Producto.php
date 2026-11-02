<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'id_producto';
    public $timestamps = false;
    protected $fillable = [
        'id_estado_producto',
        'nombre',
        'descripcion',
        'precio',
        'stock'
    ];
    public function detallePedido(): HasMany 
    { 
        return $this->hasMany(DetallePedido::class, 'id_producto', 'id_producto');
    }

    public function estadoProducto(): BelongsTo
    { 
        return $this->belongsTo(EstadoProducto::class, 'id_estado_producto', 'id_estado_producto');
    }
}
