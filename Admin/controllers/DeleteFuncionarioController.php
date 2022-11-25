<?php 
session_start();
include_once '../models/Funcionario.php';
include_once '../models/Perfil.php';

if(isset($_GET['id'])){

    $func = new Funcionario();
    $perfil = new Perfil();

    if($perfil->deleteFunc($_GET['id']) == 1){
        $func->delete($_GET['id']);

        $_SESSION['sucesso'] = "Funcionario apagado com sucesso";
        header("location: ../views/VerFuncionarios.php");
    }else{
        $_SESSION['erro'] = "Erro ao tentar apagar funcionario";
        header("location: ../views/VerFuncionarios.php");
    }
}
