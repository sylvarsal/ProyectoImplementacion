<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::create([
            'nombre_pila' => 'Juan',
            'primer_apellido' => 'Pérez',
            'segundo_apellido' => 'López',
            'telefono' => '5551234567'
        ]);
        
        Cliente::create([
            'nombre_pila' => 'María',
            'primer_apellido' => 'García',
            'segundo_apellido' => 'Gómez',
            'telefono' => '5559876543'
        ]);

        Cliente::create([
            'nombre_pila' => 'Carlos',
            'primer_apellido' => 'Ramírez',
            'segundo_apellido' => 'Cruz',
            'telefono' => '5554567890'
        ]);
    }
}