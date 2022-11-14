<?php

namespace App\Http\Controllers;

class PlatosController extends Controller
{
    public function index()
    {
        return view('platos.index');
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
