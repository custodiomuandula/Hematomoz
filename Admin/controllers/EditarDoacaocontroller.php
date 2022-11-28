<?php
session_start();

include_once '../models/Doador.php';


if($_SERVER['REQUEST'] = 'POST'){

    $doacao = new Doador();


    $dados = [
        'local' => $_POST['local_doacao'],
        'quantidade_sangue' => $_POST['quantidade_sangue'],
        'estado' => $_POST['estado'],
        'id' => $_POST['id']
    ];

    if($doacao->UpdateDoacao($dados) == 1){
        $_SESSION['sucesso'] = "Doacao Actualizada com sucesso";
        header("location: ../views/VerDoacoes.php");
    }else{
        $id = $_POST['id'];
        $_SESSION['erro'] = "Erro ao tentar actualizar doacao. Tente Novamente";  
        header("location: ../views/NovaDoacao.php?id=$id");

    }
}


?>