<?php

class DaoAdministrador {
    
    private $conexao;
    
    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=consertacar", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
            
        }
    }
    
    function inserir(Administrador $admin) {
        try {
            return $this->conexao->exec("insert into administradores (nome, email, senha, tentativas) values ('" . $admin->getNome() . "', '" . $admin->getEmail() . "', '" . $admin->getSenha() . "', 0)");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
    
    function editar(Administrador $admin) {
        try {
            return $this->conexao->exec("update administradores set nome = '" . $admin->getNome(). "', email = '" . $admin->getEmail() . "', senha = '" . $admin->getSenha() . "' where id = " . $admin->getId());
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
    
    function excluir($id) {
        try {
            return $this->conexao->exec("delete from administradores where id = " . $id);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
    
    function listar() {
        try {
            return $this->conexao->query("select * from administradores", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
    
    function selecionar($id) {
        try {
            return $this->conexao->query("select * from administradores where id = " . $id)->fetchObject();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
}
