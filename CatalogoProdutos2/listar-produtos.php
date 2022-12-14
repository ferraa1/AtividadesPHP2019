<?php
session_start();
if (!$_SESSION['email']) {
    header("Location: login.php");
}
require_once './model/Produto.php';
require_once './model/DaoProduto.php';
require_once './control/ControlProduto.php';

$control = new ControlProduto();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($control->excluir($_POST['id'])){
        echo "Deu boa";
    }else{
        foreach ($control->getErros() as $erro) {
            echo $erro."<br />";
        }
    }
}

$produtos = $control->listar();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery.js" type="text/javascript" ></script>
    </head>
    <body>

        <a href="cadastro-produto.php">Novo Produto</a>
        <a href="index.php">Início</a>
        <form method="POST" action="" id="formulario">
            <input type="hidden" value="" name="id" id="id"/>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($produtos as $p) { ?>
            <tr>
                <td><?php echo $p->id ?></td>
                <td><?php echo $p->descricao ?></td>
                <td><?php echo $p->categoria ?></td>
                <td>
                    <a href="editar-produto.php?id=<?php echo $p->id ?>">Editar</a>
                    <a href="#" onclick="excluir(<?php echo $p->id ?>)">Excluir</a>
                    
                </td>
            </tr>
            <?php } ?>
        </table>
            </form>
    </body>
    
    
    <script>
        function excluir(id){  
            if(confirm("Deseja realmente excluir o registro?")){
                //document.getElementById("id").value = id;
                $("#id").val(id);
                //document.getElementById("formulario").submit();
                $("#formulario").submit();
            }
        }
    </script>
</html>
