<?php

class ControlProduto {

    private $produto;
    private $dao;
    private $erros;

    function __construct() {
        $this->dao = new DaoProduto();
        $this->erros = array();
    }

    function listar() {
        return $this->dao->listar();
    }

    function inserir($codigo, $descricao, $valor, $id_categoria) {
        if (strlen($codigo) == 0) {
            $this->erros[] = "Preencha o código";
        }
        if (strlen($descricao) == 0) {
            $this->erros[] = "Preencha a descricao";
        }
        if (strlen($valor) == 0) {
            $this->erros[] = "Preencha o valor";
        }
        if (strlen($id_categoria == 0)) {
            $this->erros[] = "Preencha a categoria";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->produto = new Produto($codigo, $descricao, $valor, $id_categoria);
            if ($this->dao->inserir($this->produto)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir o produto";
                return false;
            }
        }
    }

    function selecionar($id) {
        return $this->dao->selecionar($id);
    }

    function editar($codigo, $descricao, $valor, $id_categoria, $id) {
        if (strlen($codigo) == 0) {
            $this->erros[] = "Preencha o código";
        }
        if (strlen($descricao) == 0) {
            $this->erros[] = "Preencha a descricao";
        }
        if (strlen($valor) == 0) {
            $this->erros[] = "Preencha o valor";
        }
        if (strlen($id_categoria) == 0) {
            $this->erros[] = "Preencha a categoria";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->produto = new Produto($codigo, $descricao, $valor, $id_categoria, $id);
            if ($this->dao->editar(($this->produto))) {
                return true;
            } else {
                $this->erros[] = "Erro ao editar o produto";
                return false;
            }
        }
    }

    function excluir($id) {
        if ($this->dao->excluir($id)) {
            return true;
        } else {
            $this->erros[] = "Erro ao excluir o registro";
            return false;
        }
    }

    function getErros() {
        return $this->erros;
    }

}
