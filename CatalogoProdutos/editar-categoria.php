<?php
require_once './model/Categoria.php';
require_once './model/DaoCategoria.php';
require_once './control/ControlCategoria.php';
$control = new ControlCategoria();
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if ($control->editar($_POST['nome'], $_GET['id'])) {
        header("Location: index.php");
    } else {
        foreach ($control->getErros() as $erro) {
            echo $erro . "<br>";
        }
    }
}
$categoria = $control->selecionar(addslashes($_GET['id']));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edição de Categoria - <?php echo $categoria->nome ?></title>
    </head>
    <body>
        <a href="index.php">Voltar</a><br><br>
        <form action="" method="POST">
            <label>Nome:</label><br>
            <input type="text" name="nome" value="<?php echo $categoria->nome ?>"><br><br>
            <input type="submit" value="Gravar">
        </form>
    </body>
</html>

