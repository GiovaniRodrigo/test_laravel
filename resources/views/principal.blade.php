<?php
<html>

<form action="object" method="POST">
    @csrf
    <div>
        <label for="">Número de série:</label>
        <input type="text" class="info" type="text" />
    </div>
    <div>
        <label for="">Capacidde do tanque</label>
        <input class="info" type="text"/>
    </div>
    <div>
        <label for="">Portador</label>
        <input class="info" type="text"/>
    </div>
    <a onclick="store" href="http://127.0.0.1:8000/save"><button>Enviar</button></a>
</form>
</html>
EOF
public function store (Request $request){
    $event = new Event;

    $event -> numero = $request->numeroSerie;
    $event -> cap = $request->capacidade;
    $event -> port = $request->portador;

    $event -> save();

    return redirect('/');
}

