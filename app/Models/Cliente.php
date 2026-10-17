<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    public function detallePedido(): HasMany 
    { 
    return $this->hasMany(DetallePedido::class); 
    } 
}
