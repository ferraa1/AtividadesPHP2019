<?php

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

    function listar() {
        return $this->conexao->query("select *, pro.id as proid from produtos pro join categorias cat on cat.id = pro.id_categoria", PDO::FETCH_OBJ);
    }

    function inserir(Produto $produto) {
        try {
            return $this->conexao->exec("insert into produtos(codigo, descricao, valor, id_categoria) values (" . $produto->getCodigo() . ", '" . $produto->getDescricao() . "', " . $produto->getValor() . ", " . $produto->getId_categoria() . ")");
        } catch (PDOException $e) {
            echo $e->getMessage();
            return 0;
        }
    }

    function editar(Produto $produto) {
        try {
            return $this->conexao->exec("update produtos set codigo = " . $produto->getCodigo() . ", descricao = '" . $produto->getDescricao() . "', valor = " . $produto->getValor() . ", id_categoria = " . $produto->getId_categoria() ." where id = " . $produto->getId());
        } catch (PDOException $e) {
            return 0;
        }
    }

    function selecionar($id) {
        try {
            return $this->conexao->query("select * from produtos where id =" . $id)->fetchObject();
        } catch (PDOException $e) {
            return 0;
        }
    }

    function excluir($id) {
        try {
            return $this->conexao->exec("delete from produtos where id =" . $id);
        } catch (PDOException $e) {
            return 0;
        }
    }

}
