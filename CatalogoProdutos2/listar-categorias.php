<?php
session_start();
if (!$_SESSION['email']) {
    header("Location: login.php");
}
require_once './model/Categoria.php';
require_once './model/DaoCategoria.php';
require_once './control/ControlCategoria.php';

$control = new ControlCategoria();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($control->excluir($_POST['id'])){
        echo "Deu boa";
    }else{
        foreach ($control->getErros() as $erro) {
            echo $erro."<br />";
        }
    }
}

$categorias = $control->listar();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery.js" type="text/javascript" ></script>
    </head>
    <body>

        <a href="cadastro-categoria.php">Nova Categoria</a>
        <a href="index.php">Início</a>
        <form method="POST" action="" id="formulario">
            <input type="hidden" value="" name="id" id="id"/>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($categorias as $c) { ?>
            <tr>
                <td><?php echo $c->id ?></td>
                <td><?php echo $c->nome ?></td>
                <td>
                    <a href="editar-categoria.php?id=<?php echo $c->id ?>">Editar</a>
                    <a href="#" onclick="excluir(<?php echo $c->id ?>)">Excluir</a>
                    
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
