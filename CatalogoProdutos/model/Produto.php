<?php

class Produto {

    private $id;
    private $descricao;
    private $valor;
    private $id_categoria;
    private $codigo;

    function __construct($codigo = null, $descricao = null, $valor = null, $id_categoria = null, $id = null) {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->id_categoria = $id_categoria;
        $this->codigo = $codigo;
    }

    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getValor() {
        return $this->valor;
    }

    function getId_categoria() {
        return $this->id_categoria;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

}
