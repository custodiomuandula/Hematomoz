<?php
session_start();

include '../models/Perfil.php';

class LoginFuncionario
{

    private $password;
    private $username;
    private $dados;
    private $verificaSenha;

    public function verificar()
    {

        if ($_SERVER['REQUEST'] = 'POST') {

            $this->password = trim($_POST['password']);

            $this->username = trim($_POST['username']);

            $this->login = new Perfil();

            $this->dados = $this->login->login($this->username);

            if (!empty($this->dados)) {

                $this->senhaUser = $this->dados->senha;

                $this->verificaSenha = password_verify($this->password, $this->senhaUser);

                if($this->dados->perfil != 'doador'){
                    if ($this->verificaSenha) {
                   
                        $_SESSION['username'] = $this->dados->username;
                        $_SESSION['perfil'] = $this->dados->perfil;
                        $_SESSION['id'] = $this->dados->id_perfil;
                       // header("location: ../views/");
                        echo "entrou";
                } else {
                    $_SESSION['erro'] =  "Usuario ou Senha incorrectos";
                    header("location:../index.php");
                }
                }else{
                    $_SESSION['erro'] =  "Usuario ou Senha incorrectos";
                    header("location:../index.php");
                }
            } else {
                
                $_SESSION['erro'] =  "Usuario ou Senha incorrectos";
                header("location:../index.php");
            }
        }
    }
}
$log = new LoginFuncionario();
$log->verificar();