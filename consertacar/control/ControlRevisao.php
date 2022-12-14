<?php

class ControlRevisao {

    private $dao;
    private $daoA;
    private $revisao;
    private $erros;
    private $alertas;

    function __construct() {
        $this->dao = new DaoRevisao();
        $this->daoA = new DaoAutomovel();
        $this->revisao = new Revisao();
        $this->erros = array();
        $this->alertas = "";
    }

    function inserir($data, $observacoes, $idVeiculo) {
        if (!strlen($data)) {
            $this->erros[] = "Informe a data";
        }
        if (!strlen($observacoes)) {
            $this->erros[] = "Informe as observacoes";
        }
        if (!strlen($idVeiculo)) {
            $this->erros[] = "Informe o veículo";
        }
        foreach ($this->dao->listar() as $r) {
            if ($idVeiculo == $r->id_veiculo) {
                if ($r->proxima_revisao < ($this->daoA->selecionar($idVeiculo)->quilometragem)) {
                    $this->alertas = "Revisão atrasada";
                } else {
                    $this->alertas = "";
                }
            }
        }
        if ($this->erros) {
            return false;
        } else {
            $this->revisao->setData($data);
            $this->revisao->setObservacoes($observacoes);
            $this->revisao->setProximaRevisao($this->daoA->selecionar($idVeiculo)->quilometragem + 10000);
            $this->revisao->setIdVeiculo($idVeiculo);
            if ($this->dao->inserir($this->revisao)) {
                return true;
            } else {
                $this->erros[] = "Erro ao inserir registro";
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

    function getAlertas() {
        return $this->alertas;
    }

    function status($id) {
        $r = $this->dao->selecionar($id);
        if (($r->quilometragem) > ($r->proxima_revisao)) {
            $this->alertas[] = "Veículo " . $r->placa . " está atrasado";
            return true;
        } else {
            return false;
        }
    }

}
