@extends('layouts.index')


@section('content')
    <html>
        <body style="font-family: sans-serif">

            <section style="width: 50%; position:relative;
                            left:25%;
                            margin-bottom:20px;
                            ">




                    <a href="carros/create" style="position: relative; left:100%;"><button style="">Cadastrar novo</button></a>
                    <a href="/logout/" style="position: relative; left:100%;"><button style="">Logout</button></a>


            </section>
            <div style="display:flex;gap:20px;position:relative; left:10px;">
                <div style="position:relative; left:10px;">
                    id
                </div>
                <div style="position:relative; left:10px;">
                    Cap. tanque
                </div>
                <div style="position:relative; left:40px;">
                    Portador
                </div>
                <div style="position:relative; left:100px;">
                    Qnt. gasta            </div>
                <div style="position:relative; left:200px;">
                    Qnt. do 1° abastecimento
                </div>
                <div style="position:relative; left:220px;">
                    Saldo do tanque
                </div>
                <div style="position:relative; left:300px;">
                    Qnt. adicionada
                </div>
                <div style="position:relative; left:330px;">
                    Acoes
                </div>
                <div style="position:relative; left:410px;">
                    Status
                </div>
            </div>


            @isset($carros)
                @foreach($carros as $carro)
                    <div style="display: flex;width:100%;background-color:tomato;padding:20px;">
                        <p style="min-width:100px;max-width:100px;">
                            <tr style="border-color:black;">
                                <td scropt="row"> {{ $loop->index + 1 }}</td>
                                -
                                <td ><p style="position:relative;left:-55px;">{{ $carro->capacidade }}</p></td>
                                -
                                <td > <p style="min-width:100px;max-width:100px;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;
                                    -webkit-line-clamp: 1; // Quantidade de linhas
                                    -webkit-box-orient: vertical;position:relative;left:40px;align-items:center;">{{ $carro->portador }}</p></td>
                                <td>
                                    <div style="display:flex;">
                                        <div>

                                            <div style="">
                                                <form action="/carros/update/{{ $carro->id }}" method="POST" style="display:flex;flex-wrap:nowrap;justify-content:space-between;gap:20px;">
                                                    @csrf
                                                    @method('PUT')
                                                    <div style="height:100px"></div>
                                                    <div style="display:block; padding:10px;">
                                                        <input id="quantia-rodada" type="number" name="qnt_gasta" size="2" placeholder="{{$carro->qnt_gasta}}" style="">
                                                    </div>
                                                    <div style="display:block; padding:10px;">
                                                        <input id="abastecer" type="number" name="qnt_abast1" size="2" placeholder="{{$carro->qnt_abast1}}" style="position: relative;left:20px;">
                                                    </div>
                                                    <div id="rodar" style="display:block;margin:5px;">
                                                        <!--$rodar = qauntia gasta - quantia total-->
                                                        <?php echo $carro->saldo_tanque;?>
                                                        <input id="rodar" type="number" name="saldo_tanque" size="2" readonly placeholder="{{$carro->saldo_tanque}}">
                                                    </div>
                                                    <input id="quantia" type="number" name="quantia" placeholder="Exemplo: 5.5" size="2" >
                                                    <input style="display:none" type="text" name="portador" value="{{ $carro->portador }}" >
                                                    <input style="display:none" type="number" name="capacidade" value="{{ $carro->capacidade }}">

                                                    <div>
                                                        <button style="margin:5px"><a href="/carros/edit/{{ $carro->id }}" class="btn btn-info edit-btn" style="text-decoration:none;color:black;"> <ion-icon
                                                            name="create-outline"></ion-icon> Editar</a></button>
                                                    </div>
                                                    <div>
                                                        <button type="submit" style="display: block;margin:5px;" id="enviar">Enviar</button>
                                                    </div>
                                                    <!--<div>
                                                        Status status(alerta, inativo e ativo), alerta quando saldo for menor que 5L
                                                    </div>-->

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        </p>
                    </div>
                @endforeach
            @endisset
        </body>
    </html>
@endsection
