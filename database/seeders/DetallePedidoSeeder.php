<?php

namespace Database\Seeders;

use App\Models\DetallePedido;
use Illuminate\Database\Seeder;

class DetallePedidoSeeder extends Seeder
{
    public function run(): void
    {
        DetallePedido::create([
            'id_pedido' => 1,
            'id_producto' => 1, 
            'id_cliente' => 1,  
            'cantidad' => 2,
            'precio_individual' => 120.50,
            'subtotal' => 241.00
        ]);

        DetallePedido::create([
            'id_pedido' => 2,
            'id_producto' => 2, 
            'id_cliente' => 2,  
            'cantidad' => 1,
            'precio_individual' => 135.00,
            'subtotal' => 135.00
        ]);

        DetallePedido::create([
            'id_pedido' => 3,
            'id_producto' => 1, 
            'id_cliente' => 3,  
            'cantidad' => 1,
            'precio_individual' => 120.50,
            'subtotal' => 120.50
        ]);
    }
}
