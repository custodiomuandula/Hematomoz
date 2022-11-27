<?php
include_once '../../config/db.php';

class Paciente
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

    public function selecAll()
    {
        $this->sql = $this->conexao->query("SELECT * FROM paciente");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }


    public function selectOne($id)
    {
        $this->sql = $this->conexao->query("SELECT * FROM doador WHERE id='$id'");
        $this->sql->execute();
        $this->dados = $this->sql->fetch(PDO::FETCH_OBJ);
        return $this->dados;
    }


    public function insert($params = [])
    {
        $this->sql = $this->conexao->prepare("INSERT INTO paciente (nome, tipo_documento,nr_documento, pais_nascimento, email, endereco, tel1, tel2, data_nascimento, id_assistente,sexo) VALUES (:nome, :tipo_documento,:nr_documento, :pais_nascimento, :email, :endereco, :tel1, :tel2, :data_nascimento, :id_assistente,:sexo)");
        $this->sql->execute($params);
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }

    public function update($params = [])
    {
        $this->sql = $this->conexao->prepare("UPDATE paciente SET nome=:nome, tipo_documento=:tipo_documento,nr_documento=:nr_documento, pais_nascimento=:pais_nascimento, email=:email, endereco=:endereco, tel1=:tel1, tel2=:tel2, data_nascimento=:data_nascimento, sexo=:sexo WHERE id=:id");
        $this->sql->execute($params);
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }

    public function delete($id)
    {
        $this->sql = $this->conexao->prepare("DELETE FROM paciente WHERE id='$id'");
        $this->sql->execute();
        $this->conta = $this->sql->rowCount();

        return $this->conta;
    }

    public function selectByName($nome)
    {
        $this->sql = $this->conexao->query("SELECT * FROM paciente WHERE nome like '%$nome%'");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }
}
