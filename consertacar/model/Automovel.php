<?php
class Automovel {
    
    private $id;
    private $placa;
    private $marca;
    private $modelo;
    private $ano;
    private $quilometragem;
    private $idCliente;
    
    function __construct($placa = null, $marca = null, $modelo = null, $ano = null, $quilometragem = null, $idCliente = null, $id = null) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->quilometragem = $quilometragem;
        $this->idCliente = $idCliente;
        $this->id = $id;
    }
    
    function getId() {
        return $this->id;
    }

    function getPlaca() {
        return $this->placa;
    }

    function getMarca() {
        return $this->marca;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getAno() {
        return $this->ano;
    }

    function getQuilometragem() {
        return $this->quilometragem;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPlaca($placa) {
        $this->placa = $placa;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setQuilometragem($quilometragem) {
        $this->quilometragem = $quilometragem;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

}
