<?php

namespace App\Http\Controllers;

use App\Models\OrderProduct;


use Illuminate\Http\Request;

class OrderProductController extends Controller
{
    public function index()
    {
        // return view('platos.index');
        $orderProducts = OrderProduct::get();

        return json_encode(['orderProducts' => $orderProducts]);
    }

    public function create(Request $request)
    {
        $orderProducts = new OrderProduct();
        $orderProducts->quantity = $request->quantity;
        $orderProducts->order_id = $request->order_id;
        $orderProducts->product_id = $request->product_id;



        $orderProducts->save();
    }

    public function show($id)
    {
        $producto = Producto::find($id);

        return $producto;
        // return view('platos.show', compact('name'));
    }

    public function update(Request $request, $id)
    {
        $orderProducts = new OrderProduct();
        $orderProducts->quantity = $request->quantity;
        $orderProducts->order_id = $request->order_id;
        $orderProducts->product_id = $request->product_id;



        $orderProducts->save();

        return $orderProducts;
    }

    public function destroy($id)
    {
        $orderProducts = OrderProduct::destroy($id);

        return $orderProducts;
    }
}
