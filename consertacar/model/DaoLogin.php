<?php

class DaoLogin {

    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=consertacar", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function verificarEmail(Administrador $admin) {
        try {
            return $this->conexao->query("select * from administradores where email = '" . $admin->getEmail() . "'")->fetchObject();
        } catch (PDOException $e) {
            return null;
        }
    }

    function efetuarLogin(Administrador $admin) {
        try {
            return $this->conexao->query("select * from administradores where email = '" . $admin->getEmail() . "' and senha = '" . $admin->getSenha() . "'")->fetchObject();
        } catch (PDOException $e) {
            return null;
        }
    }

    function contabilizarErro(Administrador $admin) {
        try {
            return $this->conexao->exec("update administradores set tentativas = tentativas + 1 where email = '" . $admin->getEmail() . "'");
        } catch (PDOException $ex) {
            return null;
        }
    }

    function zerarTentativas(Administrador $admin) {
        try {
            return $this->conexao->exec("update administradores set tentativas = 0 where email = '" . $admin->getEmail() . "'");
        } catch (PDOException $e) {
            return null;
        }
    }

    function atualizarUltimoAcesso(Administrador $admin) {
        try {
            return $this->conexao->exec("update administradores set ultimo_acesso = now() where email = '" . $admin->getEmail() . "'");
        } catch (PDOException $e) {
            return null;
        }
    }

    function getTentativas(Administrador $admin) {
        try {
            return $this->conexao->query("select tentativas from administradores where email = '" . $admin->getEmail() . "'")->fetchColumn();
        } catch (PDOException $e) {
            return null;
        }
    }
    
}
