<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        Producto::create([
            'id_estado_producto' => 1, 
            'nombre' => 'Pizza Pepperoni',
            'descripcion' => 'Pizza clásica con queso mozzarella y rebanadas de pepperoni.',
            'precio' => 120.50,
            'stock' => 20
        ]);

        Producto::create([
            'id_estado_producto' => 1, 
            'nombre' => 'Pizza Hawaiana',
            'descripcion' => 'Pizza con jamón, piña y queso.',
            'precio' => 135.00,
            'stock' => 15
        ]);

        Producto::create([
            'id_estado_producto' => 2, 
            'nombre' => 'Pizza Mexicana',
            'descripcion' => 'Pizza con frijoles, chorizo, jalapeño y cebolla.',
            'precio' => 150.00,
            'stock' => 0
        ]);

        Producto::create([
            'id_estado_producto' => 1, 
            'nombre' => 'Pizza Pepperoni',
            'descripcion' => 'Clásica con queso mozzarella y pepperoni.',
            'precio' => 120.50,
            'stock' => 20
        ]);

        Producto::create([
            'id_estado_producto' => 1, 
            'nombre' => 'Pizza Hawaiana',
            'descripcion' => 'Pizza con jamón, piña y extra queso.',
            'precio' => 135.00,
            'stock' => 15
        ]);

        Producto::create([
            'id_estado_producto' => 1, 
            'nombre' => 'Pizza 4 Quesos',
            'descripcion' => 'Mozzarella, parmesano, gorgonzola y provolone.',
            'precio' => 160.00,
            'stock' => 12
        ]);

        Producto::create([
            'id_estado_producto' => 2, 
            'nombre' => 'Pizza Mexicana',
            'descripcion' => 'Frijoles, chorizo, jalapeño y cebolla.',
            'precio' => 150.00,
            'stock' => 0
        ]);

        Producto::create([
            'id_estado_producto' => 2, 
            'nombre' => 'Pizza Carnívora',
            'descripcion' => 'Pepperoni, jamón, salchicha y tocino.',
            'precio' => 170.00,
            'stock' => 0
        ]);
    }
}
