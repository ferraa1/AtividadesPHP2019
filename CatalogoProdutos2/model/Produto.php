<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author Eduardo Stahnke
 */
class Produto {
    private $id;
    private $codigo;
    private $descricao;
    private $valor;
    private $idCategoria;
    
    function __construct($codigo = null, $descricao = null, $valor = null, $idCategoria = null, $id = null) {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->idCategoria = $idCategoria;
    }
    
    function getId() {
        return $this->id;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getValor() {
        return $this->valor;
    }

    function getIdCategoria() {
        return $this->idCategoria;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }
   
}
