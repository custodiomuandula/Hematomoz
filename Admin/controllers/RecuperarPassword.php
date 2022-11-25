<?php 
session_start();
include_once '../models/Perfil.php';
require '../../phpmailer/includes/PHPMailer.php';
require '../../phpmailer/includes/SMTP.php.php';
require '../../phpmailer/includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

if($_SERVER['REQUEST'] = 'POST'){

    $password = $_POST['password'];
    $email = $_POST['email'];
    $re_password = $_POST['re_password'];

    $perfil = new Perfil();

   $dados = $perfil->selectByEmail($email);

   if(!empty($dados)){

   }
}
