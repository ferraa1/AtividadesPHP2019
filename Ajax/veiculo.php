<?php
$conexao = new PDO("mysql:host=localhost;dbname=ajax", "root", "root");
$marcas = $conexao->query("select * from marcas", PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>veiculo.php</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <form>
            <label>Marca:</label><br>
            <select name="id_marca" id="id_marca">
                <option value="0">Selecione</option>
                <?php foreach ($marcas as $m) { ?>
                <option value="<?php echo $m->id ?>"><?php echo $m->nome ?></option>
                <?php } ?>
            </select><br><br>
            <label>Modelo:</label><br>
            <select name="id_modelo" id="id_modelo">
                <option value="0">Selecione uma marca</option>
            </select><br><br>
            <input type="submit" value="Enviar" id="enviar">
        </form>
        <script>
            $("#id_marca").change(function() {
                var id_marca = $("#id_marca").val();
                $.ajax({
                    url: 'modelos.php',
                    dataType: 'html',
                    data: {id_marca: id_marca},
                    type: 'POST',
                    success: function (resposta) {
                        $("#id_modelo").html(resposta);
                    }
                });
            });
        </script>
    </body>
</html>
