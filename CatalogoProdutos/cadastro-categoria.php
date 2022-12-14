<?php
require_once './model/Categoria.php';
require_once './model/DaoCategoria.php';
require_once './control/ControlCategoria.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $control = new ControlCategoria();
    if ($control->inserir($_POST["nome"])) {
        header("Location: index.php");
    } else {
        foreach ($control->getErros() as $erro) {
            echo $erro . "<br>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Categoria</title>
    </head>
    <body>
        <a href="index.php">Voltar</a><br><br>
        <form action="" method="POST">
            <label>Nome:</label><br>
            <input type="text" name="nome" value="<?php echo (isset($_POST['nome'])) ? $_POST ['nome'] : "" ?>"><br><br>
            <input type="submit" value="Gravar">
        </form>
    </body>
</html>

