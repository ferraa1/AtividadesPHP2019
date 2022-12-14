<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Random Number Generator</h1>
        <form method="POST" action="">
            <label>Quantidade:</label><br>
            <input type="number" name="quantidade" value="<?php echo (isset($_POST['quantidade'])) ? $_POST ['quantidade']:"" ?>"><br><br>
            <label>Inicial:</label><br>
            <input type="number" name="inicial" value="<?php echo (isset($_POST['inicial'])) ? $_POST ['inicial']:"" ?>"><br><br>
            <label>Final:</label><br>
            <input type="number" name="final" value="<?php echo (isset($_POST['final'])) ? $_POST ['final']:"" ?>"><br><br>
            <input type="submit" value="Gerar">
        </form><br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $quantidade = $_POST['quantidade'];
            $inicial = $_POST['inicial'];
            $final = $_POST['final'];
            if ($quantidade != NULL && $inicial != NULL && $final != NULL) {
                if ($inicial < $final) {
                    for ($i = 0; $i < $quantidade; $i++) {
                        echo rand($inicial, $final)."<br>";
                    }
                } else {
                    for ($i = 0; $i < $quantidade; $i++) {
                        echo rand($final, $inicial)."<br>";
                    }
                }
            }
        }
        ?>
    </body>
</html>
