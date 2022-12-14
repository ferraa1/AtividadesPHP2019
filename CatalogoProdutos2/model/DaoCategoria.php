<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoCategoria
 *
 * @author Eduardo Stahnke
 */
class DaoCategoria {

    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=produtos", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function listar() {
        return $this->conexao->query("select * from categorias", PDO::FETCH_OBJ);
    }

    function inserir(Categoria $categoria) {
        try {
            return $this->conexao->exec("insert into categorias(nome) values ('" . $categoria->getNome() . "')");
        } catch (PDOException $e) {
            echo $e->getMessage();
            return 0;
        }
    }

    function editar(Categoria $categoria) {
        try {
            return $this->conexao->exec("update categorias set nome = '" . $categoria->getNome() . "' where id=" . $categoria->getId());
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function selecionar($id) {
        try {
            return $this->conexao->query("select * from categorias where id=" . $id)
                            ->fetchObject();
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function excluir($id) {
        try {
            return $this->conexao->exec("delete from categorias where id = " . $id);
        } catch (PDOException $ex) {
            return null;
        }
    }

}
