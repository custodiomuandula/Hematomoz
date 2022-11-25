<?php
include_once '../../config/db.php';

class Perfil
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

    public function selectOne($id)
    {
        $this->sql = $this->conexao->query("SELECT * FROM perfil WHERE id_perfil='$id'");
        $this->sql->execute();
        $this->dados = $this->sql->fetchAll(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function selectByEmail($email)
    {
        $this->sql = $this->conexao->query("SELECT * FROM perfil JOIN funcionario WHERE id_func=funcionario.id AND email like '$email'");
        $this->sql->execute();
        $this->dados = $this->sql->fetch(PDO::FETCH_OBJ);
        return $this->dados;
    }

    public function insert($params = [])
    {
        $this->sql = $this->conexao->prepare("INSERT INTO perfil (username, password, perfil, id_func, id_doador) VALUES (:username, :password, :perfil, :id_func, :id_doador)");
        $this->sql->execute($params);
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }

    public function updateFunc($params = [])
    {
        $this->sql = $this->conexao->prepare("UPDATE perfil SET username=:username, perfil=:perfil WHERE id_func=:id");
        $this->sql->execute($params);
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }

    public function deleteFunc($id)
    {
        $this->sql = $this->conexao->prepare("DELETE FROM perfil WHERE id_func='$id'");
        $this->sql->execute();
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }

    public function deleteDoador($id)
    {
        $this->sql = $this->conexao->prepare("DELETE FROM perfil WHERE id_doador='$id'");
        $this->sql->execute();
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }

    public function alterarPassword($params = [])
    {
        $this->sql = $this->conexao->prepare("UPDATE perfil SET password=:password WHERE id=:id");
        $this->sql->execute($params);
        $this->conta = $this->sql->rowCount();
        return $this->conta;
    }

    public function login($params)
    {
        $this->sql = $this->conexao->query("SELECT * FROM perfil WHERE username='$params'");
        $this->sql->execute();
        $this->dados = $this->sql->fetch(PDO::FETCH_OBJ);
        return $this->dados;
    }
}
