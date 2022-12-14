<?php

require_once '../model/Administrador.php';
require_once '../model/DaoLogin.php';
require_once '../control/ControlLogin.php';

$controlLogin = new ControlLogin();

session_start();

if (!$controlLogin->efetuarLogin(addslashes($_POST['email']), addslashes($_POST['senha']))) {
    echo $controlLogin->getErros();
}