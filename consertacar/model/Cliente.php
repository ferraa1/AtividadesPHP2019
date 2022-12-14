<?php

class Cliente {
    
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $dataNascimento;
    private $telefone;
    
    function __construct($nome = null, $cpf = null, $email = null, $dataNascimento = null, $telefone = null, $id = null) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->dataNascimento = $dataNascimento;
        $this->telefone = $telefone;
        $this->id = $id;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEmail() {
        return $this->email;
    }

    function getDataNascimento() {
        return $this->dataNascimento;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

}
