<?php
session_start();
include_once '../models/Funcionario.php';
include_once '../models/Perfil.php';


if ($_SERVER['REQUEST'] = 'POST') {

    $dados = [
        'nome' => trim($_POST['nome']),
        'nr_bi' => $_POST['nr_bi'],
        'data_nascimento' => $data_nascimento = $_POST['data_nascimento'],
        'tel1' => $_POST['tel1'],
        'tel2' => $_POST['tel2'],
        'nacionalidade' => $_POST['nacionalidade'],
        'email' => $_POST['email'],
        'endereco' => $_POST['endereco'],
        'sexo' => $_POST['sexo'],
        'anos_experiencia' => $_POST['anos_experiencia'],
        'salario' =>  $_POST['salario'],
        'data_registro' => date('Y-m-d'),
        'id_admin' => 1
    ];


    $func = new Funcionario();
    $perfil = new Perfil();

    if ($func->insert($dados)) {

        $id_func = $func->selectLast()->id;

        $dados = [
            'username' => trim($_POST['nome']),
            'password' => "novouser",
            'perfil' => $_POST['perfil'],
            'id_func' => $id_func,
            'id_doador' => null
        ];

        if ($perfil->insert($dados)) {

            $_SESSION['sucesso'] = "Funcionario Criado com sucesso";
            header("location: ../views/VerFuncionarios.php");
        } else {
            $_SESSION['erro'] = "Erro ao tentar adicionar funcionario";
            header("location: ../views/NovoFuncionario.php");
        }
    } else {
        $_SESSION['erro'] = "Erro ao tentar adicionar funcionario";
        header("location: ../views/NovoFuncionario.php");
    }
}
