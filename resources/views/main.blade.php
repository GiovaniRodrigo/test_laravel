
<html>
<body>
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
                    display:flex;
                    ">



            <button style="width:100%;height:100%;" onclick="show()">Abastecer</button>

            <button style="width:100%;height:100%;" onclick="showRodar()">rodar</button>

            <button style="width:100%;height:100%;" onclick="showContar()">contar</button>

            <a href="carros/create"><button style="width:100%;height:100%;">cadastro</button></a>



    </section>

    <section style="position: relative; left:15%;">
        <form method="post" action="/main/abastecer/{{ $carros }}">
            @csrf
            @method('PUT')
            <div style="height:100px"></div>
            <div id="abastecer" style="display:none">
                <label for="">Insira a quantia a ser inserida no carro: </label>
                <input type="number">
            </div>
            <div id="rodar" style="display:none">
                <label for="">Insira a quantia de litros utiliizados: </label>
                <input type="number">
            </div>
            <div id="contar" style="display:none">
                Mostrar o numero de litrso disponiveis
            </div>

            </div>
            <button style="display: none;" id="enviar">Enviar</button>
            <button style="display:none;" id="cancelar" onclick="cancelar()">Cancelar</button>
        </form>
    </section>
    <div>
        @isset($carros)
        @foreach($carros as $carro)
            <p style="background-color:tomato;">
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    -
                    <td >{{ $carro->capacidade }}</td>
                    -
                    <td >{{ $carro->portador }}</td>
                    <td>
                        <a href="/carros/edit/{{ $carro->id }}" class="btn btn-info edit-btn"> <ion-icon name="create-outline"></ion-icon> Editar</a>
                        <form action="/carros/{{ $carro->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                        </form>
                    </td>
                </tr>
            </p>
        @endforeach
    @endisset
    </div>

</body>
<script>
    function show () {
        let d = document.getElementById("abastecer").style.display;

        if(d!="none"){
            document.getElementById("abastecer").style.display = "none";
            document.getElementById("enviar").style.display = "none";
            document.getElementById("cancelar").style.display = "none";
        }else{
            document.getElementById("abastecer").style.display = "block";
            document.getElementById("rodar").style.display = "none";
            document.getElementById("contar").style.display = "none";
            document.getElementById("enviar").style.display = "block";
        }
    }
    function showRodar () {
        let d = document.getElementById("rodar").style.display;

        if(d!="none"){
            document.getElementById("rodar").style.display = "none";
            document.getElementById("enviar").style.display = "none";
        }else{
            document.getElementById("rodar").style.display = "block";
            document.getElementById("abastecer").style.display = "none";
            document.getElementById("contar").style.display = "none";
            document.getElementById("enviar").style.display = "block";
        }
    }
    function showContar () {
        let d = document.getElementById("contar").style.display;

        if(d!="none"){
            document.getElementById("contar").style.display = "none";
            document.getElementById("enviar").style.display = "none";
        }else{
            document.getElementById("contar").style.display = "block";
            document.getElementById("rodar").style.display = "none";
            document.getElementById("abastecer").style.display = "none";
            document.getElementById("enviar").style.display = "none";
        }
    }
    function cancelar () {
        document.getElementById("abastecer").style.display = "none";
        document.getElementById("rodar").style.display = "none";
        document.getElementById("contar").style.display = "none";
        document.getElementById("enviar").style.display = "none";
    }

</script>
</html
