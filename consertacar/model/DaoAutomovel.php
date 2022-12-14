<?php
class DaoAutomovel {
    
    private $conexao;
    
    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=consertacar", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
    
    function inserir(Automovel $automovel) {
        try {
            return $this->conexao->exec("insert into automoveis (placa, marca, modelo, ano, quilometragem, id_cliente) values ('" . $automovel->getPlaca() . "', '" . $automovel->getMarca() . "', '" . $automovel->getModelo() . "', " . $automovel->getAno() . ", " . $automovel->getQuilometragem() . ", " . $automovel->getIdCliente() . ")");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
    
    function editar(Automovel $automovel) {
        try {
            return $this->conexao->exec("update automoveis set placa = '" . $automovel->getPlaca() . "', marca = '" . $automovel->getMarca() . "', modelo = '" . $automovel->getModelo() . "', ano = " . $automovel->getAno() . ", quilometragem = " . $automovel->getQuilometragem() . ", id_cliente = " . $automovel->getIdCliente() . " where id = " . $automovel->getId());
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
    
    function excluir($id) {
        try {
            return $this->conexao->exec("delete from automoveis where id = " . $id);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
    
    function listar() {
        try {
            return $this->conexao->query("select * from automoveis", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
    
    function selecionar($id) {
        try {
            return $this->conexao->query("select * from automoveis where id = " . $id)->fetchObject();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }
}
