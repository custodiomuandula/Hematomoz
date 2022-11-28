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

    public function selectAll()
    {
        $this->data = date("Y-m-d");
        $this->sql = $this->conexao->query(" SELECT funcionario.nome AS funcNome, paciente.nome AS pacNome, data_transfusao,local,estado FROM `transfusao`JOIN paciente ON transfusao.id_paciente=paciente.id JOIN funcionario on transfusao.id_medico=funcionario.id");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }
}
