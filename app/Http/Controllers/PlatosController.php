<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class PlatosController extends Controller
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
        $producto->nombre = $request->nombre;
        $producto->categoria = $request->categoria;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;

        $producto->save();
    }

    public function show($id)
    {
        $producto = Producto::find($id);

        return $producto;
        // return view('platos.show', compact('name'));
    }

    public function update(Request $request)
    {
        $data = $request->json()->all();
        $nombre = $data['nombre'];
        $categoria = $data['categoria'];
        $precio = $data['precio'];
        $descripcion = $data['descripcion'];
        $id = $data['id'];
        Producto::where('id', $id)->update(['nombre' => $nombre, 'categoria' => $categoria, 'precio' => $precio, 'descripcion' => $descripcion]);

        return json_encode(['msg' => 'Producto actualizado']);
    }

    public function destroy($id)
    {
        Producto::destroy($id);

        return json_encode(['msg' => 'Producto eliminado']);
    }
}
