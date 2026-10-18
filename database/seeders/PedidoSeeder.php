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
    }
}