<?php

class ControlCliente {
    
    private $dao;
    private $cliente;
    private $erros;
    
    function __construct() {
        $this->dao = new DaoCliente();
        $this->cliente = new Cliente();
        $this->erros = array();
    }
    
    function inserir($nome, $cpf, $email, $dataNascimento, $telefone) {
        if (!strlen($nome)) {
            $this->erros[] = "Informe o nome";
        }
        if (!strlen($cpf)) {
            $this->erros[] = "Informe o cpf";
        }
        if (!strlen($email)) {
            $this->erros[] = "Informe o email";
        }
        if (!strlen($dataNascimento)) {
            $this->erros[] = "Informe a data de nascimento";
        }
        if (!strlen($telefone)) {
            $this->erros[] = "Informe o telefone";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->cliente->setNome($nome);
            $this->cliente->setCpf($cpf);
            $this->cliente->setEmail($email);
            $this->cliente->setDataNascimento($dataNascimento);
            $this->cliente->setTelefone($telefone);
            if ($this->dao->inserir($this->cliente)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir registro";
                return false;
            }
        }
    }
    
    function editar($nome, $cpf, $email, $dataNascimento, $telefone, $id) {
        if (!strlen($nome)) {
            $this->erros[] = "Informe o nome";
        }
        if (!strlen($cpf)) {
            $this->erros[] = "Informe o cpf";
        }
        if (!strlen($email)) {
            $this->erros[] = "Informe o email";
        }
        if (!strlen($dataNascimento)) {
            $this->erros[] = "Informe a data de nascimento";
        }
        if (!strlen($telefone)) {
            $this->erros[] = "Informe o telefone";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->cliente->setId($id);
            $this->cliente->setNome($nome);
            $this->cliente->setCpf($cpf);
            $this->cliente->setEmail($email);
            $this->cliente->setDataNascimento($dataNascimento);
            $this->cliente->setTelefone($telefone);
            if ($this->dao->editar($this->cliente)) {
                return true;
            } else {
                $this->erros[] = "Erro ao editar registro";
                return false;
            }
        }
    }
    
    function excluir($id) {
        if ($this->dao->excluir($id)) {
            return true;
        } else {
            $this->erros[] = "Erro ao excluír registro";
        }
    }

    function listar() {
        return $this->dao->listar();
    }
    
    function selecionar($id) {
        return $this->dao->selecionar($id);
    }
    
    function getErros() {
        return $this->erros;
    }
}
