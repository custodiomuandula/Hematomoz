<?php
include_once '../../config/db.php';

class Funcionario
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
        $this->sql = $this->conexao->query("SELECT funcionario.id AS funcid, nome, nr_bi, nacionalidade, email,endereco,tel1,tel2,data_nascimento,sexo,anos_experiencia,salario,data_registro, perfil FROM funcionario JOIN perfil WHERE funcionario.id = id_func");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function selectOne($id)
    {
        $this->sql = $this->conexao->query("SELECT funcionario.id AS funcid, nome, nr_bi, nacionalidade, email,endereco,tel1,tel2,data_nascimento,sexo,anos_experiencia,salario,data_registro, perfil FROM funcionario JOIN perfil WHERE funcionario.id = id_func AND id='$id'");
        $this->sql->execute();
        $this->dados = $this->sql->fetch(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function insert($params = [])
    {
        $this->sql = $this->conexao->prepare("INSERT INTO funcionario (nome, nr_bi, nacionalidade, email, endereco, tel1, tel2, data_nascimento, sexo, anos_experiencia, salario, data_registro, id_admin) VALUES (:nome, :nr_bi, :nacionalidade, :email, :endereco, :tel1, :tel2, :data_nascimento, :sexo, :anos_experiencia, :salario, :data_registro, :id_admin)");
        $this->sql->execute($params);
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }

    public function update($params = [])
    {
        $this->sql = $this->conexao->prepare("UPDATE funcionario SET nome=:nome, nr_bi=:nr_bi, nacionalidade=:nacionalidade, email=:email, endereco=:endereco, tel1=:tel1, tel2=:tel2, data_nascimento=:data_nascimento, sexo=:sexo, anos_experiencia=:anos_experiencia, salario=:salario WHERE id=:id");
        $this->sql->execute($params);
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }

    public function selectLast()
    {
        $this->sql = $this->conexao->query("SELECT id FROM funcionario ORDER BY id DESC LIMIT 1");
        $this->sql->execute();
        $this->dados = $this->sql->fetch(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function delete($id)
    {
        $this->sql = $this->conexao->prepare("DELETE FROM funcionario WHERE id='$id'");
        $this->sql->execute();
        $this->conta = $this->sql->rowCount();

        return $this->conta;
    }
}
