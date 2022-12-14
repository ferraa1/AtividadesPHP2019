<?php
require_once './model/Categoria.php';
require_once './model/DaoCategoria.php';
require_once './control/ControlCategoria.php';
require_once './model/Produto.php';
require_once './model/DaoProduto.php';
require_once './control/ControlProduto.php';
$controlCa = new ControlCategoria();
$controlPr = new ControlProduto();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($controlCa->excluir($_POST['id']) || $controlPr->excluir($_POST['id'])) {
        echo "Excluído" . "<br><br>";
    } else {
        foreach ($controlCa->getErros() as $erro) {
            echo $erro . "<br><br>";
        }
        foreach ($controlPr->getErros() as $erro) {
            echo $erro . "<br><br>";
        }
    }
}
$categorias = $controlCa->listar();
$produtos = $controlPr->listar();
/*TODO: index.php -> menu
 *      listar-categorias.php
 *      listar-produtos.php
 *      cadastrar-categorias.php
 *      cadastrar-produtos.php
 *      editar-categorias.php
 *      editar-produtos.php
 */
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultas</title>
        <script src="js/jquery.js"></script>
    </head>
    <body>
        <a href="cadastro-categoria.php">Cadastro de Categoria</a><br><br>
        <form method="POST" action=""id="formulario">
            <input type="hidden" value="" name="id" id="id">
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
                <?php foreach ($categorias as $c) { ?>
                    <tr>
                        <td><?php echo $c->id ?></td>
                        <td><?php echo utf8_encode($c->nome) ?></td>
                        <td>
                            <a href="editar-categoria.php?id=<?php echo $c->id ?>">Editar</a>
                            <a href="#" onclick="excluir(<?php echo $c->id ?>)">Excluír</a>
                        </td>
                    </tr>
                <?php } ?>
            </table><br>
            <a href="cadastro-produto.php">Cadastro de Produto</a><br><br>
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Categoria</th>
                    <th>Código</th>
                    <th>Ações</th>
                </tr>
                <?php foreach ($produtos as $p) { ?>
                    <tr>
                        <td><?php echo $p->proid ?></td>
                        <td><?php echo utf8_encode($p->descricao) ?></td>
                        <td><?php echo utf8_encode($p->valor) ?></td>
                        <td><?php echo utf8_encode($p->nome) ?></td>
                        <td><?php echo utf8_encode($p->codigo) ?></td>
                        <td>
                            <a href="editar-produto.php?id=<?php echo $p->proid ?>">Editar</a>
                            <a href="#" onclick="excluir(<?php echo $p->proid ?>)"> Excluír </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    </body>
    <script>
        function excluir(id) {
            if (confirm ("Deseja realmente excluír o registro?")) {
                //document.getElementById("id").value = id;
                $("#id").val(id);
                //document.getElementById("formulario").submit();
                $("#formulario").submit();
            }
        }
    </script>
</html>
