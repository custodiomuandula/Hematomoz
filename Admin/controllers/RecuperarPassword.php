<?php
session_start();
include_once '../models/Perfil.php';
require '../../phpmailer/includes/PHPMailer.php';
require '../../phpmailer/includes/SMTP.php';
require '../../phpmailer/includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

if ($_SERVER['REQUEST'] = 'POST') {

    $password = $_POST['password'];
    $email = $_POST['email'];
    $re_password = $_POST['re_password'];

    if ($password != $password) {
        $_SESSION['erro'] = "Introduziu passwords diferentes";
        header("location: ../views/RecuperarPassword.php");
    }

    $perfil = new Perfil();

    $dados = $perfil->selectByEmail($email);

    if (!empty($dados)) {

        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        // $mail->isSMTP();                                            //Send using SMTP
        // $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        // $mail->Username   = 'eltonvagnery@gmail.com';                     //SMTP username
        // $mail->Password   = 'elton8490';                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        // $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '491f82ccdf12b8';
        $mail->Password = '9ebe461855825f';

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        //Recipients
        $mail->setFrom('hematomoz@gmail.com', "Hematomoz");
        $mail->addAddress($email, $dados->username);     //Add a recipient

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Alteracao/Definicao de Password(Hematomoz)";
        $mail->Body    = "<strong>Saudacoes $dados->username</strong>, para prosseguir com a alteracao ou definicao de password aceda ao link abaixo:<br> <a href='http://localhost/sites/Hematomoz/Admin/views/RecuperarPassword.php?password=$password&id=$dados->id_perfil'>http://localhost/sites/Hematomoz/Admin/</a>";

        if ($mail->send()) {
            $_SESSION['sucesso'] = "Email enviado com sucesso. Aceda ao seu email para prosseguir com a alteracao ou definicao de password";
            header("location:../views/RecuperarPassword.php");
        } else {
            $_SESSION['erro'] = "Erro ao tentar enviar o email. Tente Novamente";
            header("location:../views/RecuperarPassword.php");
        }
        $mail->smtpClose();
    } else {
        $_SESSION['erro'] = "Email nao encontrado";
        header("location:../views/RecuperarPassword.php");
    }
} 
