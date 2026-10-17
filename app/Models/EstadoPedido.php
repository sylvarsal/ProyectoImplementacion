<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EstadoPedido extends Model
{
    public function pedido(): HasMany
    { 
    return $this->hasMany(Pedido::class); 
    } 
}
