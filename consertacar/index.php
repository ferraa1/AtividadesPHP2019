<?php

session_start();

if (isset($_SESSION['email'])) {
    header("Location: painel.php");
} else {
    header("Location: login.php");
}