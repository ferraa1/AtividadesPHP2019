<?php

class ControlLogin {

    private $dao;
    private $admin;
    private $erros;

    function __construct() {
        $this->dao = new DaoLogin();
        $this->admin = new Administrador();
        $this->erros = "";
    }

    public function efetuarLogin($email, $senha) {
        $this->admin->setEmail($email);
        $this->admin->setSenha(md5($senha));
        
        if ($this->dao->verificarEmail($this->admin)) { //verificar se email esta cadastrado
            if ($this->dao->getTentativas($this->admin) < 5) { //verificar se nao excedeu numero de tentativas
                if ($this->dao->efetuarLogin($this->admin)) { //verificar se a senha corresponde a este email
                    $this->dao->zerarTentativas($this->admin); //zerar as tentativas
                    $this->dao->atualizarUltimoAcesso($this->admin); //atualizar a data e hora da ultima vez que o usuario acessou o sistema
                    
                    $_SESSION['email'] = $this->admin->getEmail();
                    return true;
                } else {
                    $this->dao->contabilizarErro($this->admin);
                    $this->erros = "Dados incorretos!";
                    return false;
                }
            } else {
                $this->dao->contabilizarErro($this->admin);
                $this->erros = "Número de tentativas excedido!";
                return false;
            }
        } else {
            $this->erros = "Dados incorretos!";
            return false;
        }
    }

    public function efetuarLogout() {
        $_SESSION['email'] = null;
        session_destroy();
    }

    function getErros() {
        return $this->erros;
    }

}
