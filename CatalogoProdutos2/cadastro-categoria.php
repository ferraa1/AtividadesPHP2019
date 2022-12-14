<?php
session_start();
if (!$_SESSION['email']) {
    header("Location: login.php");
}
require_once './control/ControlCategoria.php';
require_once './model/Categoria.php';
require_once './model/DaoCategoria.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $control = new ControlCategoria();
    if($control->inserir($_POST["nome"])){
        echo "Deu boa";
    }else{
        foreach ($control->getErros() as $erro) {
            echo $erro."<br />";
        }
    }
}
?>

<html>
    <head>
        <title>Cadastro de Categoria</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="" method="POST">
            <label>Nome:</label><br />
            <input type="text" value="<?php echo (isset($_POST['nome'])) ? $_POST['nome'] : ""?>" name="nome"/><br /><br />
            <input type="submit" value="Gravar" /> <a href="index.php">Voltar</a>
        </form>
    </body>
</html>

