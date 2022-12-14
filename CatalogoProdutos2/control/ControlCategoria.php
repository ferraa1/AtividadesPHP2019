<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlCategoria
 *
 * @author Eduardo Stahnke
 */
class ControlCategoria {

    private $categoria;
    private $dao;
    private $erros;

    function __construct() {
        $this->dao = new DaoCategoria();
        $this->erros = array();
    }

    function listar() {
        return $this->dao->listar();
    }

    function inserir($nome) {
        if (strlen($nome) == 0) {
            $this->erros[] = "Preencha o nome";
        }

        if ($this->erros) {
            return false;
        } else {
            $this->categoria = new Categoria($nome);
            if ($this->dao->inserir($this->categoria)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir a categoria";
                return false;
            }
        }
    }

    function selecionar($id) {
        return $this->dao->selecionar($id);
    }

    function editar($nome, $id) {
        if (strlen($nome) == 0) {
            $this->erros[] = "Informe o nome";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->categoria = new Categoria($nome, $id);
            if ($this->dao->editar($this->categoria)) {
                return true;
            } else {
                $this->erros[] = "Erro ao editar o registro";
                return false;
            }
        }
    }
    
    function excluir($id){
        if($this->dao->excluir($id)){
            return true;
        }else{
            $this->erros[] = "Erro ao exluir o registro";
            return false;
        }
    }

    function getErros() {
        return $this->erros;
    }

}
