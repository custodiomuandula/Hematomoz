<?php
session_start();
include_once '../../Doador_requisitante/Models/cadastro_doador.php';
include '../../Doador_requisitante/Models/Perfil.php';





if ($_SERVER['REQUEST'] = 'POST') {

    $dados = [
        'nome' => $_POST['nome'],
        'tipo_documento' => $_POST['tipo_documento'],
        'nr_documento' => $_POST['nr_documento'],
        'data_nascimento' => $_POST['data_nascimento'],
        'sexo' => $_POST['sexo'],
        'pais_nascimento' => $_POST['pais_nascimento'],
        'endereco' => $_POST['endereco'],
        'tel1' => $_POST['tel1'],
        'tel2' => $_POST['tel2'],
        'email' => $_POST['email']
    ];
     
    $doador = new cadastro_doador();
    $operacao= $doador->insert($dados);
   

    if ($operacao == 1) {
        $id_doador= $doador->selectLast()->id;
        $senha = $_POST['senha'];
        $senha2 = $_POST['c_senha'];

        if($senha != $senha2){
             
             $_SESSION['erro'] = "Inseriu senhas incorrectas";
             header('location: ../views/Cadastro_doador.php');
          
        }else{
            $dados = [
                'username' => $_POST['nome'] ,
                'senha' => password_hash($senha, PASSWORD_BCRYPT),
                'id_doador' => $id_doador,
                'perfil' => 'doador'
            ];
            $perfil= new Perfil();

            $operacao = $perfil->insert($dados);

            if($operacao == 1){

                 $_SESSION['doador'] =$id_doador;
                 $_SESSION['sucesso'] = "Cadastro efectuado com sucesso";
                 header("location: ../login.php");
                
            }else{
                
                 $_SESSION['erro'] = "Erro ao tentar cadastrar. Tente novamente";
                 header("location: ../views/cadastroCliente.php");    
                echo"erro";        
            }
        }

    } else {
        // $_SESSION['erro'] = "Erro ao tentar cadastrar. Tente novamente";
        // header("location: ../views/cadastroCliente");
        echo"erro";
    }
}

    