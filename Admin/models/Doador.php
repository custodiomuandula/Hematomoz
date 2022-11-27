<?php
include_once '../../config/db.php';

class Doador
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

    public function selectAll()
    {
        $this->sql = $this->conexao->query("SELECT * FROM doador");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function selecAllDoacoes()
    {
        $this->data = date("Y-m-d");
        $this->sql = $this->conexao->query("SELECT doacao.id AS doacaoId, funcionario.nome as nomeM, doador.nome AS nomeD, data_doacao, local,estado,quantidade_sangue FROM doacao JOIN doador,funcionario WHERE data_doacao='$this->data' AND id_doador= doador.id AND funcionario.id=id_medico");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function selecAllDoacoes2($data)
    {
        $this->sql = $this->conexao->query("SELECT doacao.id AS doacaoId, funcionario.nome as nomeM, doador.nome AS nomeD, data_doacao, local,estado,quantidade_sangue FROM doacao JOIN doador,funcionario WHERE data_doacao='$data' AND id_doador= doador.id AND funcionario.id=id_medico");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function selecAllDoacoes3()
    {
        $this->data = date("Y-m-d");
        $this->sql = $this->conexao->query("SELECT doacao.id AS doacaoId, funcionario.nome as nomeM, doador.nome AS nomeD, data_doacao, local,estado,quantidade_sangue FROM doacao JOIN doador,funcionario WHERE data_doacao<'$this->data' AND id_doador= doador.id AND funcionario.id=id_medico");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function count()
    {
        $this->data = date("Y-m-d");
        $this->sql = $this->conexao->query("SELECT * FROM agendamento WHERE data_doacao='$this->data'");
        $this->sql->execute();
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }


    public function countDoacoes()
    {
        $this->data = date("Y-m-d");
        $this->sql = $this->conexao->query("SELECT * FROM doacao WHERE data_doacao='$this->data'");
        $this->sql->execute();
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }

    public function selectOne($id)
    {
        $this->sql = $this->conexao->query("SELECT * FROM doador WHERE id='$id'");
        $this->sql->execute();
        $this->dados = $this->sql->fetch(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function selectByName($nome)
    {
        $this->sql = $this->conexao->query("SELECT * FROM doador WHERE nome like '%$nome%'");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function selectOneTriagem($id)
    {
        $this->sql = $this->conexao->query("SELECT * FROM doador JOIN pre_triagem WHERE doador.id='$id' AND doador.id = id_doador");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function selectOneAgendamento($id)
    {
        $this->sql = $this->conexao->query("SELECT * FROM doador JOIN agendamento WHERE doador.id='$id' AND doador.id = id_doador");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }


    public function selectOneDoacao($id)
    {
        $this->sql = $this->conexao->query("SELECT * FROM doador JOIN doacao WHERE doador.id='$id' AND doador.id = id_doador");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }


    public function selectLastDoacao($id)
    {
        $this->sql = $this->conexao->query("SELECT * FROM doador JOIN doacao WHERE doador.id='$id' AND doador.id = id_doador ORDER BY doador.id DESC LIMIT 1");
        $this->sql->execute();
        $this->dados = $this->sql->fetch(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function selectQuantidade()
    {
        $this->sql = $this->conexao->query("SELECT SUM(quantidade_sangue) as quant FROM doacao WHERE data_doacao='$this->data'");
        $this->sql->execute();
        $this->dados = $this->sql->fetch(PDO::FETCH_OBJ);
        return $this->dados;
    }


    public function insert($params = [])
    {
        $this->sql = $this->conexao->prepare("INSERT INTO doador (nome, tipo_documento,nr_documento, pais_nascimento, email, endereco, tel1, tel2, data_nascimento, id_assistente,sexo) VALUES (:nome, :tipo_documento,:nr_documento, :pais_nascimento, :email, :endereco, :tel1, :tel2, :data_nascimento, :id_assistente,:sexo)");
        $this->sql->execute($params);
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }

    public function update($params = [])
    {
        $this->sql = $this->conexao->prepare("UPDATE doador SET nome=:nome, tipo_documento=:tipo_documento,nr_documento=:nr_documento, pais_nascimento=:pais_nascimento, email=:email, endereco=:endereco, tel1=:tel1, tel2=:tel2, data_nascimento=:data_nascimento, sexo=:sexo WHERE id=:id");
        $this->sql->execute($params);
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }


    public function delete($id)
    {
        $this->sql = $this->conexao->prepare("DELETE FROM doador WHERE id='$id'");
        $this->sql->execute();
        $this->conta = $this->sql->rowCount();

        return $this->conta;
    }

    public function selectToday()
    {
        $this->data = date('Y-m-d');
        $this->sql = $this->conexao->query("SELECT local_doacao FROM agendamento WHERE data_agendamento='$this->data' LIMIT 3");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }
}
