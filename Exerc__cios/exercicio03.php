<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valor = $_POST['valor'];
    $soma = 1;
    for ($i = $valor; $i > 1; $i--) {
        $soma *= $i;
    }
    echo "Fatorial de " . $valor . " é " . $soma . "<br><br>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 3</title>
    </head>
    <body>
        <form method="POST" action="">
            <label>Valor:</label><br>
            <input type="number" name="valor"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
