<?php

class ControlAdministrador {
    
    private $dao;
    private $admin;
    private $erros;
    
    function __construct() {
        $this->dao = new DaoAdministrador();
        $this->admin = new Administrador();
        $this->erros = array();
    }
    
    function inserir($nome, $email, $senha) {
        if (!strlen($nome)) {
            $this->erros[] = "Informe o nome";
        }
        if (!strlen($email)) {
            $this->erros[] = "Informe o email";
        }
        if (!strlen($senha)) {
            $this->erros[] = "Informe a senha";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->admin->setNome($nome);
            $this->admin->setEmail($email);
            $this->admin->setSenha(md5 ($senha));
            if ($this->dao->inserir($this->admin)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir registro";
                return false;
            }
        }
    }
    
    function editar($nome, $email, $senha, $id) {
        if (!strlen($nome)) {
            $this->erros[] = "Informe o nome";
        }
        if (!strlen($email)) {
            $this->erros[] = "Informe o email";
        }
        if (!strlen($senha)) {
            $this->erros[] = "Informe a senha";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->admin->setId($id);
            $this->admin->setNome($nome);
            $this->admin->setEmail($email);
            $this->admin->setSenha(md5 ($senha));
            if ($this->dao->editar($this->admin)) {
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
