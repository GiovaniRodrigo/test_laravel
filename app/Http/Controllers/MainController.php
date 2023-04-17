<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\Http\Controllers\CarroController;

class MainController extends Controller
{
    public function index (){
        $carros = Carro::all();
        return view('main',['carros' => $carros]);
    }

    public function abastecer ($carro){
        //fazer cálculo
        CarroController::update($carro);
        return view('main');
    }
}
