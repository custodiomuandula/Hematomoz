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
        'id' => $_POST['id']
    ];


    $doador = new Doador();

    if ($doador->update($dados) == 1) {


        $_SESSION['sucesso'] = "Doador Actualizado com sucesso";
        header("location: ../views/VerDoadores.php");
    } else {
        $_SESSION['erro'] = "Erro ao tentar actualizar funcionario";
        header("location: ../views/NovoDoador.php");
    }
}
