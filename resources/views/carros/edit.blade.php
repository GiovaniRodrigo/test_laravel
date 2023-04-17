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
                        <h2> Alterar carro </h2> <br>
                        <h3>Edite os campos desejados:</h3><br>
                        <h4>
                            <tr>
                                <td>Capacidade:</td>
                                <td>
                                    <input type="radio" name="capacidade" value=50 {{ $carro->capacidade == 50 ? "checked" : ""}}>50
                                    <input type="radio" name="capacidade" value=55 {{ $carro->capacidade == 55 ? "checked" : ""}}>55
                                    <input type="radio" name="capacidade" value=40 {{ $carro->capacidade == 40 ? "checked" : ""}}>40
                                    <br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>Portador:</td>
                                <td><input type="text" name="portador" maxlength="250" value="{{ $carro->portador }}"><br></td>
                            </tr>
                            <tr style="display:none;">
                                <td>Quantia:</td>
                                <td><input type="text" name="quantia" maxlength="250" value="{{ $carro->quantia }}"><br></td>
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
