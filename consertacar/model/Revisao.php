<?php

class Revisao {
    
    private $id;
    private $data;
    private $observacoes;
    private $proximaRevisao;
    private $idVeiculo;
    
    function __construct($data = null, $observacoes = null, $proximaRevisao = null, $idVeiculo = null, $id = null) {
        $this->data = $data;
        $this->observacoes = $observacoes;
        $this->proximaRevisao = $proximaRevisao;
        $this->idVeiculo = $idVeiculo;
        $this->id = $id;
    }

    function getId() {
        return $this->id;
    }

    function getData() {
        return $this->data;
    }

    function getObservacoes() {
        return $this->observacoes;
    }

    function getProximaRevisao() {
        return $this->proximaRevisao;
    }

    function getIdVeiculo() {
        return $this->idVeiculo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    function setProximaRevisao($proximaRevisao) {
        $this->proximaRevisao = $proximaRevisao;
    }

    function setIdVeiculo($idVeiculo) {
        $this->idVeiculo = $idVeiculo;
    }

}
