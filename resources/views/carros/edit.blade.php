<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar</title>
    </head>
    <body>
        <table>
            <tr>
                <form action="/carros/update/{{ $carro->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <table>
                        <h2> UPDATE </h2> <br>
                        <h3>Edite os campos desejados:</h3><br>
                        <h4>
                            <tr>
                                <td>Capacidade: </td>
                                <td><input type="text" name="capacidade" maxlength="250" value="{{ $carro->capacidade }}"><br></td>
                            </tr>
                            <tr>
                                <td>Portador:</td>
                                <td><input type="text" name="portador" maxlength="250" value="{{ $carro->portador }}"><br></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Executar"></td>
                            </tr>
                        </h4>
                    </table>
                </form>
            </tr>
        </table>
    </body>
</html>
