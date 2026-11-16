<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {

        Producto::updateOrCreate(
            ['nombre' => 'Pizza Pepperoni'],
            ['id_estado_producto' => 1, 
            'descripcion' => 'Pizza clásica con queso mozzarella y rebanadas de pepperoni.',
            'precio' => 120.50,
            'stock' => 20
        ]);

        Producto::updateOrCreate(
            ['nombre' => 'Pizza Hawaiana'],
            ['id_estado_producto' => 1, 
            'descripcion' => 'Pizza con jamón, piña y queso.',
            'precio' => 135.00,
            'stock' => 15
        ]);

        Producto::updateOrCreate(
            ['nombre' => 'Pizza Mexicana'],
            ['id_estado_producto' => 2, 
            'descripcion' => 'Pizza con frijoles, chorizo, jalapeño y cebolla.',
            'precio' => 150.00,
            'stock' => 0
        ]);

        Producto::updateOrCreate(
            ['nombre' => 'Pizza Vegetariana'],
            ['id_estado_producto' => 1, 
            'descripcion' => 'Pizza con vegetales frescos y queso mozzarella.',
            'precio' => 140.00,
            'stock' => 18
        ]);

        Producto::updateOrCreate(
            ['nombre' => 'Pizza Cochinita'],
            ['id_estado_producto' => 1, 
            'descripcion' => 'Pizza con cochinita pibil, cebolla morada y queso.',
            'precio' => 140.00,
            'stock' => 12
        ]);

        Producto::updateOrCreate(
            ['nombre' => 'Pizza 4 Quesos'],
            ['id_estado_producto' => 1, 
            'descripcion' => 'Pizza con mozzarella, parmesano, gorgonzola y provolone.',
            'precio' => 160.00,
            'stock' => 12
        ]);

        Producto::updateOrCreate(
            ['nombre' => 'Pizza Jardinera'],
            ['id_estado_producto' => 2, 
            'descripcion' => 'Pizza con espinacas, champiñones, pimientos y aceitunas.',
            'precio' => 150.00,
            'stock' => 0
        ]);

        Producto::updateOrCreate(
            ['nombre' => 'Pizza Carnívora'],
            ['id_estado_producto' => 2, 
            'descripcion' => 'Pepperoni, jamón, salchicha y tocino.',
            'precio' => 170.00,
            'stock' => 0
        ]);
    }
}
