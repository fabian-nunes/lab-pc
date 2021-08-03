<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index() {

        $orderN = Order::where('estado', 0)->simplePaginate(10);
        $orderR = Order::where('estado', 1)->simplePaginate(10);

        return view('order', ['orders' => $orderN, 'ordersR' => $orderR]);
    }

    public function store() {

        $price = \request('oPrice');
        $obs = \request('oObs');

        if ($price != "" && $obs != "" && is_numeric($price)) {
            $order = new Order();
            $order->preco = $price;
            $order->obs = $obs;
            $order->save();
        }

        return redirect('/encomendas');
    }

    public function complete($id) {

        $order = Order::findOrFail($id);

        if ($order->estado == 0) {
            $order->estado = 1;
            $order->save();
        }
        return redirect('/encomendas');
    }

    public function update() {
        $id = \request('idOE');
        $order = Order::findOrFail($id);

        $price = \request('oPriceE');
        $obs = \request('oObsE');

        if ($price != "" && $obs != "" && is_numeric($price)) {
            $order->preco = $price;
            $order->obs = $obs;
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
