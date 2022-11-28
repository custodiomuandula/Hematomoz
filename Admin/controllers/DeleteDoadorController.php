<?php 
session_start();
include_once '../models/Doador.php';
include_once '../models/Perfil.php';


if(isset($_GET['id'])){

    $doador = new Doador();
    $perfil = new Perfil();

    if($perfil->deleteDoador($_GET['id']) == 1){
        $doador->delete($_GET['id']);
        $_SESSION['sucesso'] = "Doador apagado com sucesso";
        header("location: ../views/VerDoadores.php");
    }else{
        $_SESSION['erro'] = "Erro ao tentar apagar Doador";
        header("location: ../views/VerDoadores.php");
    }
}
