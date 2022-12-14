<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlProduto
 *
 * @author Eduardo Stahnke
 */
class ControlProduto {

    private $produto;
    private $dao;
    private $erros;

    function __construct() {
        $this->dao = new DaoProduto();
        $this->produto = new Produto();
        $this->erros = array();
    }

    public function inserir($codigo, $descricao, $valor, $idCategoria) {
        if (!strlen($codigo)) {
            $this->erros[] = "Informe o código";
        }
        if (!strlen($descricao)) {
            $this->erros[] = "Informe a descricao";
        }
        if (!strlen($valor)) {
            $this->erros[] = "Informe o valor";
        }
        if (!strlen($idCategoria)) {
            $this->erros[] = "Selecione a categoria";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->produto = new Produto($codigo, $descricao, $valor, $idCategoria);
            if ($this->dao->inserir($this->produto)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir o registro";
                return false;
            }
        }
    }

    public function editar($codigo, $descricao, $valor, $idCategoria, $id) {
        if (!strlen($codigo)) {
            $this->erros[] = "Informe o código";
        }
        if (!strlen($descricao)) {
            $this->erros[] = "Informe a descricao";
        }
        if (!strlen($valor)) {
            $this->erros[] = "Informe o valor";
        }
        if (!strlen($idCategoria)) {
            $this->erros[] = "Selecione a categoria";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->produto = new Produto($codigo, $descricao, $valor, $idCategoria, $id);
            if ($this->dao->editar($this->produto)) {
                return true;
            } else {
                $this->erros[] = "Erro ao editar registro";
                return false;
            }
        }
    }

    public function listar() {
        return $this->dao->listar();
    }

    public function selecionar($id) {
        return $this->dao->selecionar($id);
    }

    public function excluir($id) {
        return $this->dao->excluir($id);
    }

    function getErros() {
        return $this->erros;
    }

}
