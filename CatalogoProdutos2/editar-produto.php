<?php
session_start();
if (!$_SESSION['email']) {
    header("Location: login.php");
}
require_once './control/ControlCategoria.php';
require_once './model/DaoCategoria.php';
require_once './model/DaoProduto.php';
require_once './control/ControlProduto.php';
require_once './model/Produto.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $control = new ControlProduto();
    if ($control->editar($_POST['codigo'], $_POST['descricao'], $_POST['valor'], $_POST['id_categoria'], $_GET['id'])) {
        echo "Deu boa";
    } else {
        foreach ($control->getErros() as $erro) {
            echo $erro . "<br />";
        }
    }
}
$controlCategoria = new ControlCategoria();
$categorias = $controlCategoria->listar();
$controlProduto = new ControlProduto();

$produto = $controlProduto->selecionar(addslashes($_GET["id"]));
?>

<html>
    <head>
        <title>Cadastro de Produto</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="" method="POST">
            <label>Selecione a categoria</label><br />
            <select name="id_categoria">
                <?php foreach ($categorias as $c) { ?>
                    <option <?php if ($c->id == $produto->id_categoria) {
                        echo "selected";
                    } ?> value="<?php echo $c->id ?>"><?php echo $c->nome ?></option>
<?php } ?>
            </select><br /><br />
            <label>Código:</label><br />
            <input type="text" value="<?php echo $produto->codigo ?>" name="codigo"/><br /><br />
            <label>Descrição:</label><br />
            <input type="text" value="<?php echo $produto->descricao ?>" name="descricao"/><br /><br />
            <label>Valor:</label><br />
            <input type="text" value="<?php echo $produto->valor ?>" name="valor"/><br /><br />
            <input type="submit" value="Gravar" /> <a href="listar-produtos.php">Voltar</a>
        </form>
    </body>
</html>

