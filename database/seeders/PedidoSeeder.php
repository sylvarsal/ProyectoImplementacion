<?php

namespace Database\Seeders;

use App\Models\Pedido;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PedidoSeeder extends Seeder
{
    public function run(): void
    {
        Pedido::create([
            'id_estado' => 1, 
            'fecha_hora' => Carbon::now()->subHours(2),
            'total' => 241.00
        ]);

        Pedido::create([
            'id_estado' => 3, 
            'fecha_hora' => Carbon::now()->subHour(),
            'total' => 135.00
        ]);

        Pedido::create([
            'id_estado' => 4, 
            'fecha_hora' => Carbon::now()->subMinutes(30),
            'total' => 391.00
        ]);

        Pedido::create([
            'id_estado' => 1, 
            'fecha_hora' => Carbon::now()->subMinutes(5), 
            'total' => 120.50
        ]);
        Pedido::create([
            'id_estado' => 1, 
            'fecha_hora' => Carbon::now()->subMinutes(10), 
            'total' => 270.00
        ]);

        Pedido::create([
            'id_estado' => 2, 
            'fecha_hora' => Carbon::now()->subMinutes(20), 
            'total' => 160.00
        ]);
        Pedido::create([
            'id_estado' => 2, 
            'fecha_hora' => Carbon::now()->subMinutes(25), 
            'total' => 255.50
        ]);

        Pedido::create([
            'id_estado' => 3, 
            'fecha_hora' => Carbon::now()->subMinutes(40), 
            'total' => 320.00
        ]);
        Pedido::create([
            'id_estado' => 3, 
            'fecha_hora' => Carbon::now()->subMinutes(45), 
            'total' => 361.50
        ]);

        // 4. ENTREGADO (Insignia azul)
        Pedido::create([
            'id_estado' => 4, 
            'fecha_hora' => Carbon::now()->subHours(2), 
            'total' => 295.00
        ]);
        Pedido::create([
            'id_estado' => 4, 
            'fecha_hora' => Carbon::now()->subHours(3), 
            'total' => 482.00
        ]);

        // 5. CANCELADO (Insignia roja)
        Pedido::create([
            'id_estado' => 5, 
            'fecha_hora' => Carbon::now()->subDays(1), 
            'total' => 270.00
        ]);
        Pedido::create([
            'id_estado' => 5, 
            'fecha_hora' => Carbon::now()->subDays(2), 
            'total' => 401.50
        ]);
    }
}