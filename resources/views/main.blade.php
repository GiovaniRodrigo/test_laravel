
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
                            <div>

                                <div style="">
                                    <form action="/carros/update/{{ $carro->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div style="height:100px"></div>
                                        <div style="display:block; padding:10px;">
                                            <input id="abastecer" type="number" name="abastecer" size="2" onkeyup="abastecer()">
                                        </div>
                                        <div id="rodar" style="display:block;margin:5px;">
                                            <input id="rodar" type="number" name="rodar" size="2" onkeyup="rodar()">
                                        </div>
                                        <input id="quantia" type="number" name="quantia" value="{{ $carro->quantia }}" size="2">
                                        <input style="display:none" type="text" name="portador" value="{{ $carro->portador }}" >
                                        <input style="display:none" type="number" name="capacidade" value="{{ $carro->capacidade }}">

                                        <div>
                                            <button style="margin:5px"><a href="/carros/edit/{{ $carro->id }}" class="btn btn-info edit-btn" style="text-decoration:none;color:black;"> <ion-icon
                                                name="create-outline"></ion-icon> Editar</a></button>
                                        </div>
                                        <div>
                                            <button type="submit" style="display: block;margin:5px;" id="enviar">Enviar</button>
                                        </div>

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
    <script>
        function abastecer() {
            alert("teste");
            let abastecer = parseInt(document.getElementById("abastecer"));
            let quantia = parseInt(document.getElementById("quantia"));
            if(valida()){
                quantia.value = abastecer + quantia;
            }
        }
        function rodar() {
            let abastecer = parseInt(document.getElementById("rodar"));
            let quantia = parseInt(document.getElementById("quantia"));
            quantia.value = abastecer - quantia;
        }
        function valida() {
            let abastecer = parseInt(document.getElementById("abastecer"));
            let quantia = parseInt(document.getElementById("quantia"));
            let capacidade = parseInt(document.getElementById("capacidade"));
            let result = abastecer + quantia;
            if(result > capacidade){
                alert("Quantidade a abastecer é maior que o suportado pelo veículo.");
                return true;
            }
            return false;
        }
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
