<?php

require_once 'model/Administrador.php';
require_once 'model/DaoLogin.php';
require_once 'control/ControlLogin.php';

$controlLogin = new ControlLogin();

session_start();

$controlLogin->efetuarLogout();
header("Location: login.php");
