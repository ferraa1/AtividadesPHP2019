<?php
session_start();
if (!$_SESSION['email']) {
    header("Location: login.php");
}
require_once './control/ControlCategoria.php';
require_once './model/Categoria.php';
require_once './model/DaoCategoria.php';
$control = new ControlCategoria();
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if ($control->editar($_POST['nome'], $_GET['id'])) {
        echo "Deu boa";
    } else {
        foreach ($control->getErros() as $erro) {
            echo $erro . "<br />";
        }
    }
}
$categoria = $control->selecionar($_GET['id']);
?>

<html>
    <head>
        <title>Edição de Categoria</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="" method="POST">
            <label>Nome:</label><br />
            <input type="text" value="<?php echo $categoria->nome ?>" name="nome"/><br /><br />
            <input type="submit" value="Gravar" /> <a href="listar-categorias.php">Voltar</a>
        </form>
    </body>
</html>
