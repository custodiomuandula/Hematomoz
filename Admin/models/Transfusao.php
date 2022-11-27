<?php
include_once '../../config/db.php';

class Transfusao
{
    private $conexao;
    private $sql;
    private $conta;
    private $dados = [];
    private $dbConnection;
    private $data;

    function __construct()
    {
        $this->dbConnection = new dbConnection();
        $this->conexao = $this->dbConnection->connect();
        return $this->conexao;
    }

    public function selecAll()
    {
        $this->sql = $this->conexao->query("SELECT nome_instituicao, requisicao.id AS reqid, data_entrega,data_requisicao, estado FROM requisicao JOIN requisitante WHERE requisitante.id = id_requisitante");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }


    public function count()
    {
        $this->data = date("Y-m-d");
        $this->sql = $this->conexao->query("SELECT * FROM transfusao WHERE data_transfusao='$this->data'");
        $this->sql->execute();
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }
}
