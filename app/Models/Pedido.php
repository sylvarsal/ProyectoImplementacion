<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'id_pedido';
    public $timestamps = false;
    protected $fillable = [
        'id_estado',
        'fecha_hora',
        'total'
    ];
    protected $casts = [
        'fecha_hora' => 'datetime',
    ];
    public function detallePedido(): HasMany  
    { 
    return $this->hasMany(DetallePedido::class); 
    }

    public function estadoPedido(): BelongsTo 
    { 
    return $this->belongsTo(EstadoPedido::class); 
    } 
}
