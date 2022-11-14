<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto();
        $producto->categoria = 'Pizzas';
        $producto->nombre = 'Pizza con queso';
        $producto->descripcion = 'Pizza con queso y salsa de tomate';
        $producto->precio = 4000;

        $producto->save();

        $producto2 = new Producto();
        $producto2->categoria = 'Pizzas';
        $producto2->nombre = 'Pizza con carne';
        $producto2->descripcion = 'Pizza con carne y salsa de tomate';
        $producto2->precio = 4500;

        $producto2->save();

        $producto3 = new Producto();
        $producto3->categoria = 'Sushi';
        $producto3->nombre = 'sushi de salmon';
        $producto3->descripcion = 'sushi de salmon con arroz';
        $producto3->precio = 5000;

        $producto3->save();
    }
}
