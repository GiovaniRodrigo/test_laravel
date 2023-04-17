<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function list(){
        $carros = Carro::all();

        return view('carros.create',['carros' => $carros]);
    }

    public function create(){
        $carros = Carro::all();
        return view('carros.create', ['carros' => $carros]);
    }

    public function store(Request $request){
        $carro = new Carro;

        $carro->capacidade       = $request->capacidade;
        $carro->portador         = $request->portador;
        $carro->quantia          = $request->quantia;

        $carro->save();

        return redirect('/')->with('msg', 'Inclusão realizada!');
    }

    public function destroy($id){

        Carro::where('id',$id)->delete();

        return redirect('/')->with('msg', 'Exclusão realizada!');
    }

    public function edit($id){

        $carro = Carro::where('id',$id)->first();

        return view('carros.edit',['carro' => $carro]);
    }

    public function update(Request $request){
        
        Carro::where('id',$request->id)->update(
            [
                "capacidade" => $request->capacidade,
                "portador" => $request->portador
            ]
        );

        return redirect('/')->with('msg', 'Editado com sucesso!');
    }
}
