<?php
include_once '../../config/db.php';

class cadastro_doador
{
    private $conexao;
    private $sql;
    private $conta;
    private $dados = [];
    private $dbConnection;

    function __construct()
    {
        $this->dbConnection = new dbConnection();
        $this->conexao = $this->dbConnection->connect();
        return $this->conexao;
    }

    public function insert($params = [])
    {
        $this->sql = $this->conexao->prepare("INSERT INTO doador (nome,tipo_documento,nr_documento,data_nascimento,sexo,pais_nascimento,endereco,tel1,tel2,email) VALUES (:nome,:tipo_documento,:nr_documento,:data_nascimento,:sexo ,:pais_nascimento,:endereco,:tel1,:tel2,:email)");
        $this->sql->execute($params);
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }
    public function selectLast()
    {
        $this->sql = $this->conexao->query("SELECT id FROM doador ORDER BY id DESC LIMIT 1 ");
        $this->sql->execute();
        $this->dados = $this->sql->fetch(PDO::FETCH_OBJ);
        return $this->dados;
    }


 }