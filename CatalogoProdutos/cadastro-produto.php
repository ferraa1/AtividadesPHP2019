<?php
require_once './model/Produto.php';
require_once './model/DaoProduto.php';
require_once './control/ControlProduto.php';
require_once './model/Categoria.php';
require_once './model/DaoCategoria.php';
require_once './control/ControlCategoria.php';
$controlCategoria = new ControlCategoria();
$categorias = $controlCategoria->listar();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controlProduto = new ControlProduto();
    if ($controlProduto->inserir($_POST["codigo"], $_POST["descricao"], $_POST["valor"], $_POST["id_categoria"])) {
        header("Location: index.php");
    } else {
        foreach ($controlProduto->getErros() as $erro) {
            echo $erro . "<br>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Produto</title>
    </head>
    <body>
        <a href="index.php">Voltar</a><br><br>
        <form action="" method="POST">
            <label>Código:</label><br>
            <input type="number" name="codigo" value="<?php echo (isset($_POST['codigo'])) ? $_POST ['codigo'] : "" ?>"><br><br>
            <label>Descrição:</label><br>
            <input type="text" name="descricao" value="<?php echo (isset($_POST['descricao'])) ? $_POST ['descricao'] : "" ?>"><br><br>
            <label>Valor:</label><br>
            <input type="number" name="valor" value="<?php echo (isset($_POST['valor'])) ? $_POST ['valor'] : "" ?>"><br><br>
            <label>Categoria:</label><br>
            <select name="id_categoria">
                <?php foreach ($categorias as $c) { ?>
                <option value="<?php echo $c->id ?>"><?php echo $c->nome ?></option>
                <?php } ?>
            </select><br><br>
            <input type="submit" value="Gravar">
        </form>
    </body>
</html>

