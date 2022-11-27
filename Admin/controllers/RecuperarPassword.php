<?php 
session_start();
include_once '../models/Perfil.php';
require '../../phpmailer/includes/PHPMailer.php';
require '../../phpmailer/includes/SMTP.php';
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

        $mail->isSMTP();
        $mail->Host ='smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->Username = "eltonbata14@gmail.com";
        $mail->Password = "Youngking14";
        $mail->Subject = "Recuperacao do Password";
        $mail->setFrom("eltonbata14@gmail.com");
        $mail->Body = "Hello World";
        $mail->addAddress("eltonbata14@gmail.com");

        if($mail->send()){
            echo "enviado";
        }else{
            echo "nao enviado".$mail->ErrorInfo;
        }
        $mail->smtpClose();
   }
}
