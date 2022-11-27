<?php 
session_start();
include_once '../models/Paciente.php';


if(isset($_GET['id'])){

    $paciente = new Paciente();

    if($paciente->delete($_GET['id']) == 0){
        $_SESSION['sucesso'] = "Paciente apagado com sucesso";
        header("location: ../views/VerPacientes.php");
    }else{
        $_SESSION['erro'] = "Erro ao tentar apagar Paciente";
        header("location: ../views/VerPacientes.php");
    }
}
