<?php
session_start();

include_once '../models/Doador.php';


if($_SERVER['REQUEST'] = 'POST'){

    $doacao = new Doador();


    $dados = [
        'anemico' => $_POST['anemico'],
        'alcool' => $_POST['alcool'],
        'pressao' => $_POST['pressao'],
        'peso' => $_POST['peso'],
        'altura' => $_POST['altura'],
        'exercicios' => $_POST['exercicios'],
        'doencas' => $_POST['doencas'],
        'habitos' => $_POST['habitos'],
        'temperatura' => $_POST['temperatura'],
        'id_doador' => $_POST['id']
    ];

    if($doacao->insertPreTriagem($dados) == 1){
        $id = $_POST['id'];
        $_SESSION['sucesso'] = "Pre-Triagem Registrada com sucesso";
        header("location: ../views/VerDoador.php?id=$id");
    }else{
        $id = $_POST['id'];
        $_SESSION['erro'] = "Erro ao tentar registrar Pre-Triagem. Tente Novamente";  
        header("location: ../views/VerDoador.php?id=$id");

    }
}


?>