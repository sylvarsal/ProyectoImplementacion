<?php

namespace Database\Seeders;

use App\Models\EstadoPedido;
use Illuminate\Database\Seeder;

class EstadoPedidoSeeder extends Seeder
{
    public function run(): void
    {
        EstadoPedido::create([
            'nombre_estado' => 'Recibido'
        ]);
        EstadoPedido::create([
            'nombre_estado' => 'En preparación'
        ]);
        EstadoPedido::create([
            'nombre_estado' => 'Listo'
        ]);
        EstadoPedido::create([
            'nombre_estado' => 'Entregado'
        ]);
        EstadoPedido::create([
            'nombre_estado' => 'Cancelado'
        ]);
    }
}