<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class PlatosController extends Controller
{
    public function index()
    {
        // return view('platos.index');
        $productos = Producto::get();

        return json_encode(['productos' => $productos]);
    }

    public function create()
    {
        return 'Formulario para crear un plato';
    }

    public function show($name)
    {
        return view('platos.show', compact('name'));
    }
}
