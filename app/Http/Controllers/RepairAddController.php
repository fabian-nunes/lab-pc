<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepairAddController extends Controller
{
    public function index() {

        return view('repairAForm');
    }
}
