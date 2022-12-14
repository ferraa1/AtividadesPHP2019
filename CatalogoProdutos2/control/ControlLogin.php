<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlLogin
 *
 * @author aluno
 */
class ControlLogin {

    private $login;
    private $dao;
    private $erros;

    public function __construct() {
        $this->login = new Login();
        $this->dao = new DaoLogin();
        $this->erros = array();
    }

    public function efetuarLogin($email, $senha) {
        $this->login = new Login($email, md5(md5($senha)));
        if ($this->dao->verificarEmail($this->login)) {
            if ($this->dao->efetuarLogin($this->login)) {
                $_SESSION['email'] = $this->login->getEmail();
                return true;
            } else {
                $this->erros[] = "Dados de login incorretos";
                return false;
            }
        } else {
            $this->erros[] = "Dados de login incorretos";
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
