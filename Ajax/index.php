<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>index.php</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <form>
            <label for="cep">CEP</label>
            <input id="cep" type="text" required>
            <label for="logradouro">Logradouro</label>
            <input id="logradouro" type="text">
            <label for="cidade">Cidade</label>
            <input id="cidade" type="text" required>
            <label for="bairro">Bairro</label>
            <input id="bairro" type="text" required>
            <label for="estado">Estado</label>
            <select id="uf">
                <option value="PR">Paraná</option>
                <option value="SC">Santa Catarina</option>
                <option value="RS">Rio Grande do Sul</option>
            </select>
        </form><br>
        <a href="veiculo.php">veiculo.php</a>
        <script>
            $("#cep").focusout(function() {
                $.ajax({
                    url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
                    dataType: 'json',
                    success: function (resposta) {
                        $("#logradouro").val(resposta.logradouro);
                        $("#bairro").val(resposta.bairro);
                        $("#cidade").val(resposta.localidade);
                        $("#uf").val(resposta.uf);
                    }
                });
            });
        </script>
    </body>
</html>