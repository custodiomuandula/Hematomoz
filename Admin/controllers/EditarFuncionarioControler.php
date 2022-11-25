<?php
session_start();
include_once '../models/Funcionario.php';
include_once '../models/Perfil.php';


if ($_SERVER['REQUEST'] = 'POST') {

    $dados = [
        'nome' => trim($_POST['nome']),
        'nr_bi' => $_POST['nr_bi'],
        'data_nascimento' => $_POST['data_nascimento'],
        'tel1' => $_POST['tel1'],
        'tel2' => $_POST['tel2'],
        'nacionalidade' => $_POST['nacionalidade'],
        'email' => $_POST['email'],
        'endereco' => $_POST['endereco'],
        'sexo' => $_POST['sexo'],
        'anos_experiencia' => $_POST['anos_experiencia'],
        'salario' =>  $_POST['salario'],
        'id' => $_POST['id']
    ];

    $id_func = $_POST['id'];

    $func = new Funcionario();
    $perfil = new Perfil();

    if($func->update($dados) == 1){

        $dados = [
            'username' => trim($_POST['nome']),
            'perfil' => $_POST['perfil'],
            'id' => $id_func
        ];
        
        if($perfil->updateFunc($dados)){

            $_SESSION['sucesso'] = "Funcionario Actualizado com sucesso";
            header("location: ../views/VerFuncionarios.php");
        }else{
            $_SESSION['erro'] = "Erro ao tentar actualizar funcionario. Tente Novamente";
            //header("location: ../views/EditarFuncionario.php?id=$id_func");
        }

    }else{
        $_SESSION['erro'] = "Erro ao tentar actualizar funcionario. Tente Novamente";
        //header("location: ../views/EditarFuncionario.php?id=$id_func");
        echo "bug";
    }
}
