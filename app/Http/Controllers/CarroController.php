<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function index(){
        $carros = Carro::all();
        return view('main',['carros' => $carros]);
    }

    public function create(){
        return view('carros.create');
    }

    public function store(Request $request){
        $carro = new Carro;

        $carro->capacidade       = $request->capacidade;
        $carro->portador         = $request->portador;

        $carro->save();

        return redirect('/')->with('msg', 'Inclusão realizada!');
    }

    public function destroy($carro_pk){

        Carro::where('carro_pk',$carro_pk)->delete();

        return redirect('/')->with('msg', 'Exclusão realizada!');
    }

    public function edit($carro_pk){

        $carro = Carro::where('carro_pk',$carro_pk)->first();

        return view('carros.edit',['carro' => $carro]);
    }

    public function update(Request $request){
        
        Carro::where('carro_pk',$request->carro_pk)->update(
            [
                "capacidade" => $request->capacidade,
                "portador" => $request->portador
            ]
        );

        return redirect('/')->with('msg', 'Editado com sucesso!');
    }
}
