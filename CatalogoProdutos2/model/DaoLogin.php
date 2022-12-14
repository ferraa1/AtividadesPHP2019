<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoLogin
 *
 * @author aluno
 */
class DaoLogin {

    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=produtos", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function verificarEmail(Login $login) {
        try {
            return $this->conexao->query("select * from usuarios where email = '" . $login->getEmail() . "' and ativo = 1")->fetchObject();
        } catch (PDOException $e) {
            return null;
        }
    }

    function efetuarLogin(Login $login) {
        try {
            return $this->conexao->query("select * from usuarios where email = '" . $login->getEmail() . "' and senha = '" . $login->getSenha() . "' and ativo = 1")->fetchObject();
        } catch (PDOException $e) {
            return null;
        }
    }

}
