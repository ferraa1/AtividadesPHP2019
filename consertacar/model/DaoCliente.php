<?php

class DaoCliente {
    
    private $conexao;
    
    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=consertacar", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
            
        }
    }
    
    function inserir(Cliente $cliente) {
        try {
            return $this->conexao->exec("insert into clientes (nome, cpf, email, data_nascimento, telefone) values ('" . $cliente->getNome() . "', '" . $cliente->getCpf() . "', '" . $cliente->getEmail() . "', '" . $cliente->getDataNascimento() . "', '" . $cliente->getTelefone() . "')");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
    
    function editar(Cliente $cliente) {
        try {
            return $this->conexao->exec("update clientes set nome = '" . $cliente->getNome(). "', cpf = '" . $cliente->getCpf() . "', email = '" . $cliente->getEmail() . "', data_nascimento = '" . $cliente->getDataNascimento() . "', telefone = '" . $cliente->getTelefone() . "' where id = " . $cliente->getId());
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
    
    function excluir($id) {
        try {
            return $this->conexao->exec("delete from clientes where id = " . $id);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
    
    function listar() {
        try {
            return $this->conexao->query("select * from clientes", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
    
    function selecionar($id) {
        try {
            return $this->conexao->query("select * from clientes where id = " . $id)->fetchObject();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
}
