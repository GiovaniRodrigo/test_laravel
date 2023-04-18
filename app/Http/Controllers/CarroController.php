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
        $carro->qnt_gasta        = $request->qnt_gasta;
        $carro->qnt_abast1       = $request->qnt_abast1;
        $carro->saldo_tanque     = $request->saldo_tanque;

        $carro->save();

        return redirect('/dashboard')->with('msg', 'Inclusão realizada!');
    }

    public function destroy($id){
        Carro::where('id',$id)->delete();

        return redirect('/dashboard')->with('msg', 'Exclusão realizada!');
    }

    public function edit($id){

        $carro = Carro::where('id',$id)->first();

        return view('carros.edit',['carro' => $carro]);
    }

    public function update(Request $request){

        //soma quantia presente no carro com a ser inserida
        $aux1 = $request->quantia;
        $aux2 = Carro::findOrFail($request->id);
        $aux3 = $aux2->quantia;
        $soma = $aux3 + $aux1;

        //calcula saldo do tanque
        $aux5 = Carro::findOrFail($request->id);
        $aux6 = $request->qnt_gasta;    //quantia gasta
        //quantia + quantia abastecida1 -
        $aux7 = $aux5->quantia;          //quantia abastecida
        $aux8 = $aux5->qnt_abast1;      //quantia abastecimento 1
        $saldo_tanque = $aux8 + $aux7 - $aux6;

        //dd($saldo_tanque);

        Carro::where('id',$request->id)->update(
            [
                "capacidade" => $request->capacidade,
                "portador" => $request->portador,
                "quantia" => $soma,
                "qnt_gasta" => $request->qnt_gasta,
                "qnt_abast1" => $request->qnt_abast1,
                "saldo_tanque" => $saldo_tanque
            ]
        );

        return redirect('/dasbhoard')->with('msg', 'Editado com sucesso!');
    }
}
