<?php 
session_start();
include_once '../models/Perfil.php';


if($_SERVER['REQUEST'] = 'POST'){

    $password = $_POST['password'];
    $email = $_POST['email'];
    $re_password = $_POST['re_password'];

    $perfil = new Perfil();

   $dados = $perfil->selectByEmail($email);
}
