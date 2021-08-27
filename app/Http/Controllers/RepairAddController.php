<?php

namespace App\Http\Controllers;

use App\Models\Repair;
use Illuminate\Http\Request;

class RepairAddController extends Controller
{
    public function index() {

        return view('repairAForm');
    }

    public function store() {
        $name = \request('repairName');
        $client = \request('repairClient');
        $number = \request('repairNumber');
        $pecas = \request('pecas');
        $obs = \request('repairObs');
        $price = \request('repairPrice');

        if ($name != " " && $number != " " && $client != " " && strlen($number) == 9 && is_numeric($price)) {
            $repair = new Repair();
            $repair->nome = $name;
            $repair->cliente = $client;
            $repair->numero = $number;
            $repair->pecas = $pecas;
            $repair->obs = $obs;
            $repair->preco = $price;
            $repair->save();
        }

        return redirect('/repair');
    }
}
