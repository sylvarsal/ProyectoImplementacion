<?php

namespace Database\Seeders;

use App\Models\EstadoProducto;
use Illuminate\Database\Seeder;

class EstadoProductoSeeder extends Seeder
{
    public function run(): void
    {
        EstadoProducto::create([
            'nombre_estado' => 'Disponible'
        ]);
        EstadoProducto::create([
            'nombre_estado' => 'Agotado'
        ]);
    }
}
