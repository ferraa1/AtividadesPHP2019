<?php
class ControlAutomovel {
    
    private $dao;
    private $automovel;
    private $erros;
    
    function __construct() {
        $this->dao = new DaoAutomovel();
        $this->automovel = new Automovel();
        $this->erros = array();
    }
    
    function inserir($placa, $marca, $modelo, $ano, $quilometragem, $idCliente) {
        if (!strlen($placa)) {
            $this->erros[] = "Informe a placa";
        }
        if (!strlen($marca)) {
            $this->erros[] = "Informe a marca";
        }
        if (!strlen($modelo)) {
            $this->erros[] = "Informe o modelo";
        }
        if (!strlen($ano)) {
            $this->erros[] = "Informe o ano";
        }
        if (!strlen($quilometragem)) {
            $this->erros[] = "Informe a quilometragem";
        }
        if (!strlen($idCliente)) {
            $this->erros[] = "Informe o cliente";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->automovel->setPlaca($placa);
            $this->automovel->setMarca($marca);
            $this->automovel->setModelo($modelo);
            $this->automovel->setAno($ano);
            $this->automovel->setQuilometragem($quilometragem);
            $this->automovel->setIdCliente($idCliente);
            if ($this->dao->inserir($this->automovel)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir registro";
                return false;
            }
        }
    }
    
    function editar($placa, $marca, $modelo, $ano, $quilometragem, $idCliente, $id) {
        if (!strlen($placa)) {
            $this->erros[] = "Informe a placa";
        }
        if (!strlen($marca)) {
            $this->erros[] = "Informe a marca";
        }
        if (!strlen($modelo)) {
            $this->erros[] = "Informe o modelo";
        }
        if (!strlen($ano)) {
            $this->erros[] = "Informe o ano";
        }
        if (!strlen($quilometragem)) {
            $this->erros[] = "Informe a quilometragem";
        }
        if (!strlen($idCliente)) {
            $this->erros[] = "Informe o cliente";
        }
        if ($this->erros) {
            return false;
        } else {
            $this->automovel->setId($id);
            $this->automovel->setPlaca($placa);
            $this->automovel->setMarca($marca);
            $this->automovel->setModelo($modelo);
            $this->automovel->setAno($ano);
            $this->automovel->setQuilometragem($quilometragem);
            $this->automovel->setIdCliente($idCliente);
            if ($this->dao->editar($this->automovel)) {
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
