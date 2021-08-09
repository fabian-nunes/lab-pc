<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index() {

        $orderN = Order::where('estado', 5)->paginate(1, ['*'], 'orders');
        $orderR = Order::where('estado', 5)->paginate(1, ['*'], 'orderR');

        return view('order', ['orders' => $orderN, 'ordersR' => $orderR]);
    }

    public function store() {
        $price = \request('priceT');
        $names = \request('total');

        if ($price != "" && $names != "" && is_numeric($price)) {
            $order = new Order();
            $order->preco = $price;
            $order->pecas = $names;
            $order->save();
        }

        return redirect('/encomendas');
    }

    public function complete($id) {

        $order = Order::findOrFail($id);
        $obs = \request('oObs');

        if ($order->estado == 0) {
            $order->estado = 1;
            if ($obs != "") {
                $order->obs = $obs;
            }
            $order->save();
        }
        return redirect('/encomendas');
    }

    public function destroy() {
        $id = \request('idDO');
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect('/encomendas');
    }
}
