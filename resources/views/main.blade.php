
<html>
<body style="font-family: sans-serif">
    <header style="background-color:rgb(7, 47, 82); position:relative;top:-8px;left:-8px;width:110%">
        <h1 style="font-family: sans-serif;
        text-align:center;
        font-size:100px;
        background-image: linear-gradient(to bottom, rgb(51, 153, 136), rgb(171, 206, 235), rgb(120, 192, 185));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        color: black;">Teste Laravel</h1>
    </header>
    <section style="width: 50%; position:relative;
                    left:25%;
                    margin-bottom:20px;
                    ">




            <a href="carros/create" style="position: relative; left:100%;"><button style="">Cadastrar novo</button></a>



    </section>
    <div style="display:flex;gap:20px;position:relative; left:10px;">
        <div style="position:relative; left:10px;">
            id
        </div>
        <div style="position:relative; left:10px;">
            Qnt. <br>Inserida
        </div>
        <div>
            Portador
        </div>
        <div style="position:relative; left:100px;">
            Abastecer
        </div>
        <div style="position:relative; left:300px;">
            Saldo do tanque
        </div>
    </div>


    @isset($carros)
    @foreach($carros as $carro)
    <div style="display: flex;width:100%;background-color:tomato;">
        <p >
            <tr style="border-color:black;">
                <td scropt="row" > {{ $loop->index + 1 }}</td>
                -
                <td >{{ $carro->capacidade }}</td>
                -
                <td >{{ $carro->portador }}</td>
                <td>
                    <div style="display:flex;">



                            <form action="/carros/{{ $carro->id }}" method="POST">
                                @csrf

                            </form>
                            <div>
                               <!-- <button id="btn-abastecer{{$carro->id}}" style="width:100%;height:100%;" onclick="show({{$carro->id}})">Abastecer</button>
                            </div>
                            <button style="width:100%;height:100%;" onclick="showRodar()">rodar</button>

                            <button style="width:100%;height:100%;" onclick="showContar()">contar</button>
                        -->

                        <div style="">
                            <form method="post" action="/main/abastecer/{{ $carros }}" style="display:flex;">
                                @csrf
                                @method('PUT')
                                <div style="height:100px"></div>
                                <div id="abastecer{{$carro->id}}" style="display:block; padding:10px;">
                                    <label for="">Insira a quantia a ser inserida no carro: </label>
                                    <input type="number" size="2">
                                </div>
                                <div id="rodar" style="display:block;margin:5px;">
                                    <label for="">Insira a quantia de litros utiliizados: </label>
                                    <input type="number">
                                </div>
                                <div>
                                    <button style="margin:5px"><a href="/carros/edit/{{ $carro->id }}" class="btn btn-info edit-btn" style="text-decoration:none;color:black;"> <ion-icon
                                name="create-outline"></ion-icon> Editar</a></button>
                                </div>
                                <div>
                                    <button type="submit" style="display: block;margin:5px;" id="enviar">Enviar</button>
                                </div>

                                <div>
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn" style="margin:5px;"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                                </div>

                                </div>

                                <div>

                                </div>
                            </form>
                        </div>
                    </div>
                </td>

            </tr>
        </p>
    </div>
    @endforeach
@endisset

</body>
<script>
    function show ($receber) {
        let d = document.getElementById("abastecer"+$receber).style.display;

        if(d!="block"){
            document.getElementById("abastecer"+$receber).style.display = "block";
            document.getElementById("btn-abastecer"+$receber).style.display = "none";
        }else{
            document.getElementById("abastecer"+$receber).style.display = "none";
            document.getElementById("btn-abastecer"+$receber).style.display = "none";
        }
    }
    function showRodar () {
        let d = document.getElementById("rodar").style.display;

        if(d!="block"){
            document.getElementById("rodar").style.display = "block";
            document.getElementById("enviar").style.display = "block";
        }else{
            document.getElementById("rodar").style.display = "block";
            document.getElementById("abastecer").style.display = "block";
            document.getElementById("contar").style.display = "block";
            document.getElementById("enviar").style.display = "block";
        }
    }
    function showContar () {
        let d = document.getElementById("contar").style.display;

        if(d!="block"){
            document.getElementById("contar").style.display = "block";
            document.getElementById("enviar").style.display = "block";
        }else{
            document.getElementById("contar").style.display = "block";
            document.getElementById("rodar").style.display = "block";
            document.getElementById("abastecer").style.display = "block";
            document.getElementById("enviar").style.display = "block";
        }
    }
    function cancelar () {
        document.getElementById("btn-abastecer").style.display = "block";
    }

</script>
</html
