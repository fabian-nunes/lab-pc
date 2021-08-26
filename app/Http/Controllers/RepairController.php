<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function index() {


        $orderN = Order::where('estado', 0)->paginate(5, ['*'], 'orders');
        $orderR = Order::where('estado', 1)->paginate(5, ['*'], 'orderR');

        return view('repair', ['orders' => $orderN, 'ordersR' => $orderR]);
    }
}
