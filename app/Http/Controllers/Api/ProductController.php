<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // return view('platos.index');
        $productos = Producto::get();

        return json_encode(['productos' => $productos]);
    }

    public function create(Request $request)
    {
        $producto = new Producto();
        $request->nombre = $request->nombre;
        $request->categoria = $request->categoria;
        $request->precio = $request->precio;
        $request->descripcion = $request->descripcion;

        $producto->save();
    }

    public function show($name)
    {
        return view('platos.show', compact('name'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($request->$id);
        $producto->nombre = $request->nombre;
        $producto->categoria = $request->categoria;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;

        $producto->save();

        return $producto;
    }

    public function destroy($id)
    {
        $producto = Producto::destroy($id);

        return $producto;
    }
}
