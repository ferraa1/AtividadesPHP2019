<?php

class DaoRevisao {

    private $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=consertacar", "root", "root");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

    function inserir(Revisao $revisao) {
        try {
            return $this->conexao->exec("insert into revisoes (data, observacoes, proxima_revisao, id_veiculo) values ('" . $revisao->getData() . "', '" . $revisao->getObservacoes() . "', " . $revisao->getProximaRevisao() . ", " . $revisao->getIdVeiculo() . ")");
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }

    function excluir($id) {
        try {
            return $this->conexao->exec("delete from revisoes where id = " . $id);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }

    function listar() {
        try {
            return $this->conexao->query("select * from revisoes", PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }

    function selecionar($id) {
        try {
            return $this->conexao->query("select * from revisoes re join automoveis au on au.id = re.id_veiculo where re.id = " . $id)->fetchObject();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return null;
        }
    }

}
