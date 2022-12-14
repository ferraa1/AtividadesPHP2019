<?php

require_once './control/ControlLogin.php';
require_once './model/Login.php';
require_once './model/DaoLogin.php';
$control = new ControlLogin();
$control->efetuarLogout();
header("Location: login.php");
?>