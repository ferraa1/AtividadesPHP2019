<?php
session_start();
if (!$_SESSION['email']) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery.js" type="text/javascript" ></script>
    </head>
    <body>
        <a href="listar-categorias.php">Listar Categorias</a><br /><br />
        <a href="listar-produtos.php">Listar Produtos</a><br /><br />
        <a href="logout.php">Logout</a>
</html>
