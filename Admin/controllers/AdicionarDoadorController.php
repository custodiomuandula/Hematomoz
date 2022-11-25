<?php
session_start();
include_once '../models/Doador.php';


if ($_SERVER['REQUEST'] = 'POST') {

    $dados = [
        'nome' => trim($_POST['nome']),
        'tipo_documento' => $_POST['tipo_documento'],
        'nr_documento' => $_POST['nr_documento'],
        'data_nascimento' => $data_nascimento = $_POST['data_nascimento'],
        'tel1' => $_POST['tel1'],
        'tel2' => $_POST['tel2'],
        'pais_nascimento' => $_POST['pais_nascimento'],
        'email' => $_POST['email'],
        'endereco' => $_POST['endereco'],
        'sexo' => $_POST['sexo'],
        'id_assistente' => 1
    ];


    $doador = new Doador();

    if ($doador->insert($dados)) {


        $_SESSION['sucesso'] = "Doador Criado com sucesso";
        header("location: ../views/VerDoadores.php");
    } else {
        $_SESSION['erro'] = "Erro ao tentar adicionar funcionario";
        header("location: ../views/NovoDoador.php");
    }
}
