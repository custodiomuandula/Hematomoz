<?php
session_start();

include_once '../models/Doador.php';


if($_SERVER['REQUEST'] = 'POST'){

    $doacao = new Doador();


    $dados = [
        'data_doacao' => date('Y-m-d'),
        'local' => $_POST['local_doacao'],
        'quantidade_sangue' => $_POST['quantidade_sangue'],
        'estado' => 'Aguardando',
        'id_medico' => 1,
        'id_doador' => $_POST['id']
    ];

    if($doacao->insertDoacao($dados) == 1){
        $_SESSION['sucesso'] = "Doacao Registrada com sucesso";
        header("location: ../views/VerDoacoes.php");
    }else{
        $id = $_POST['id'];
        $_SESSION['erro'] = "Erro ao tentar registrar doacao. Tente Novamente";  
        header("location: ../views/NovaDoacao.php?id=$id");

    }
}


?>