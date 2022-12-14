<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoProduto
 *
 * @author Eduardo Stahnke
 */
class DaoProduto {

    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=produtos", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function inserir(Produto $produto) {
        try {
            return $this->conexao->exec("insert into produtos (codigo, descricao, valor, id_categoria) values (" . $produto->getCodigo() . ", '" . $produto->getDescricao() . "', " . $produto->getValor() . ", " . $produto->getIdCategoria() . ")");
        } catch (PDOOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }

    public function editar(Produto $produto) {
        try {
            return $this->conexao->exec("update produtos set codigo=" . $produto->getCodigo() . ", descricao='" . $produto->getDescricao() . "', valor=" . $produto->getValor() . ", id_categoria = " . $produto->getIdCategoria() . " where id=" . $produto->getId());
        } catch (PDOException $ex) {
            return null;
        }
    }

    public function excluir($id) {
        try {
            return $this->conexao->exec("delete from produtos where id = " . $id);
        } catch (PDOException $ex) {
            return null;
        }
    }

    public function listar() {
        try {
            return $this->conexao->query("select p.id, p.descricao, p.codigo, p.valor, c.nome as categoria from produtos p join categorias c on c.id = p.id_categoria", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            return null;
        }
    }

    public function selecionar($id) {
        try {
            return $this->conexao->query("select * from produtos where id=" . $id)->fetchObject();
        } catch (PDOException $ex) {
            return null;
        }
    }

}
