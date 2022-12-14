<?php
require_once './model/Produto.php';
require_once './model/DaoProduto.php';
require_once './control/ControlProduto.php';
require_once './model/Categoria.php';
require_once './model/DaoCategoria.php';
require_once './control/ControlCategoria.php';
$controlProduto = new ControlProduto();
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if ($controlProduto->editar($_POST["codigo"], $_POST["descricao"], $_POST["valor"], $_POST["id_categoria"], $_GET['id'])) {
        header("Location: index.php");
    } else {
        foreach ($controlProduto->getErros() as $erro) {
            echo $erro . "<br>";
        }
    }
}
$controlCategoria = new ControlCategoria();
$categorias = $controlCategoria->listar();
$produto = $controlProduto->selecionar(addslashes($_GET['id']));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edição de Produto - <?php echo $produto->codigo ?></title>
    </head>
    <body>
        <a href="index.php">Voltar</a><br><br>
        <form action="" method="POST">
            <label>Código:</label><br>
            <input type="number" name="codigo" value="<?php echo $produto->codigo ?>"><br><br>
            <label>Descrição:</label><br>
            <input type="text" name="descricao" value="<?php echo $produto->descricao ?>"><br><br>
            <label>Valor:</label><br>
            <input type="number" name="valor" value="<?php echo $produto->valor ?>"><br><br>
            <label>Categoria:</label><br>
            <select name="id_categoria">
                <?php foreach ($categorias as $c) { ?>
                <option <?php if($c->id == $produto->id_categoria) { echo "selected"; } ?> value="<?php echo $c->id ?>"><?php echo $c->nome ?></option>
                <?php } ?>
            </select><br><br>
            <input type="submit" value="Gravar">
        </form>
    </body>
</html>