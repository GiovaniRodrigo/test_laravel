<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página principal</title>
    </head>
    <body>
        <table>
            <tr>
                <form action="/carros" method="post">
                    @csrf
                    <table>
                        <h2> CREATE </h2> <br>
                        <h3>Informe os campos para adicionar um carro:</h3><br>
                        <h4>
                            <tr>
                                <td>Capacidade: </td>
                                <td><input type="text" name="capacidade" maxlength="250"><br></td>
                            </tr>
                            <tr>
                                <td>Portador:</td>
                                <td><input type="text" name="portador" maxlength="250"><br></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Executar"></td>
                            </tr>
                        </h4>
                    </table>
                </form>
            </tr>
            <br><br>
            @foreach($carros as $carro)
                <?php echo $carros ?>
                <p style="background-color:tomato;">
                    <tr>
                        <td scropt="row">{{ $loop->index + 1 }}</td>
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
            <br><br>
        </table>
    </body>
</html>