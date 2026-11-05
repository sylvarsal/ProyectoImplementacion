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
        
        DetallePedido::create([
            'id_pedido' => 4, 
            'id_producto' => 1, 
            'id_cliente' => 1, 
            'cantidad' => 1, 
            'precio_individual' => 120.50, 
            'subtotal' => 120.50
        ]);

        DetallePedido::create([
            'id_pedido' => 5,
            'id_producto' => 2,
            'id_cliente' => 2,
            'cantidad' => 2,
            'precio_individual' => 135.00,
            'subtotal' => 270.00
        ]);

        DetallePedido::create([
            'id_pedido' => 6,
            'id_producto' => 3,
            'id_cliente' => 3,
            'cantidad' => 1,
            'precio_individual' => 160.00,
            'subtotal' => 160.00
        ]);

        DetallePedido::create([
            'id_pedido' => 7,
            'id_producto' => 1,
            'id_cliente' => 1,
            'cantidad' => 1,
            'precio_individual' => 120.50,
            'subtotal' => 120.50
        ]);
        DetallePedido::create([
            'id_pedido' => 7,
            'id_producto' => 2,
            'id_cliente' => 1,
            'cantidad' => 1,
            'precio_individual' => 135.00,
            'subtotal' => 135.00
        ]);

        DetallePedido::create([
            'id_pedido' => 8,
            'id_producto' => 3,
            'id_cliente' => 2,
            'cantidad' => 2,
            'precio_individual' => 160.00,
            'subtotal' => 320.00
        ]);

        DetallePedido::create([
            'id_pedido' => 9,
            'id_producto' => 1,
            'id_cliente' => 3,
            'cantidad' => 3,
            'precio_individual' => 120.50,
            'subtotal' => 361.50
        ]);

        DetallePedido::create([
            'id_pedido' => 10,
            'id_producto' => 2,
            'id_cliente' => 1,
            'cantidad' => 1,
            'precio_individual' => 135.00,
            'subtotal' => 135.00
        ]);

        DetallePedido::create([
            'id_pedido' => 10,
            'id_producto' => 3,
            'id_cliente' => 1,
            'cantidad' => 1,
            'precio_individual' => 160.00,
            'subtotal' => 160.00
        ]);

        DetallePedido::create([
            'id_pedido' => 11,
            'id_producto' => 1,
            'id_cliente' => 2,
            'cantidad' => 4,
            'precio_individual' => 120.50,
            'subtotal' => 482.00
        ]);

        DetallePedido::create([
            'id_pedido' => 12,
            'id_producto' => 2,
            'id_cliente' => 3,
            'cantidad' => 2,
            'precio_individual' => 135.00,
            'subtotal' => 270.00
        ]);

        DetallePedido::create([
            'id_pedido' => 13,
            'id_producto' => 3,
            'id_cliente' => 1,
            'cantidad' => 1,
            'precio_individual' => 160.00,
            'subtotal' => 160.00
        ]);
        DetallePedido::create([
            'id_pedido' => 13,
            'id_producto' => 1,
            'id_cliente' => 1,
            'cantidad' => 2,
            'precio_individual' => 120.50,
            'subtotal' => 241.00
        ]);
    }
}
