<?php

namespace App\Http\Controllers;

use Controllers;

class CarroController extends Controller
{
    public function index (){
        $consumoCombustivel = ConsumoCombustivel::all();
        return view('main',['consumoCombustivel' => $consumoCombustivel]);
    }
}
