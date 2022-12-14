<?php
require_once './model/DaoLogin.php';
require_once './model/Login.php';
require_once './control/ControlLogin.php';
session_start();
if (isset($_SESSION['email'])) {
    header("Location: index.php");
}
$control = new ControlLogin;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($control->efetuarLogin($_POST['email'], $_POST['senha'])) {
        header("Location: index.php");
    } else {
        foreach ($control->getErros() as $erro) {
            echo $erro."<br />";
        }
    }
}
?>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="" method="POST">
            <label>Email:</label><br />
            <input type="text" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : "" ?>" name="email"/><br /><br />
            <label>Senha:</label><br />
            <input type="password" value="" name="senha"/><br /><br />
            <input type="submit" value="Login" />
        </form>
    </body>
</html>

