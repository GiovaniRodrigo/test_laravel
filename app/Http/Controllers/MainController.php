<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Carro;
use App\Http\Controllers\CarroController;

class MainController extends Controller
{
    public function index (){
        $carros = Carro::all();
        return view('main',['carros' => $carros]);
    }

    public function abastecer (Request $carro){
        //fazer cálculo
        //dd($carro);
        $url = '/carros/update/'+$carro->id;
        Route::put($url,[CarroController::class,'update']);
        return view('main');
    }
}
