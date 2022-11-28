<?php
session_start();

include '../models/Perfil.php';



class LoginFuncionario
{

    private $password;
    private $username;
    private $dados;
    private $verificapassword;

    public function verificar()
    {

        if ($_SERVER['REQUEST'] = 'POST') {

            $this->password = trim($_POST['password']);

            $this->username = trim($_POST['username']);

            $this->login = new Perfil();

            $this->dados = $this->login->login($this->username);

            if (!empty($this->dados)) {

                $this->passwordUser = $this->dados->password;

                $this->verificapassword = password_verify($this->password, $this->passwordUser);

                if($this->dados->perfil == 'doador'){
                    if ($this->verificapassword) {
                   
                        $_SESSION['username'] = $this->dados->username;
                        $_SESSION['perfil'] = $this->dados->perfil;
                        $_SESSION['id'] = $this->dados->id;
                        header("location: ../views/head2.php");
                    
                } else {
                    $_SESSION['erro'] =  "Usuario ou Senha incorrectos ";
                    header("location: ../login.php");
                }
                }else{
                    $_SESSION['erro'] =  "Usuario ou Senha incorrectos";
                    header("location: ../login.php");
                }
            } else {
                
                $_SESSION['erro'] =  "Usuario ou Senha incorrectos";
                header("location: ../login.php");
            }
        }
    }
}
$log = new LoginFuncionario();
$log->verificar();