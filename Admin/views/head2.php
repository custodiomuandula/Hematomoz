<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets//css/bootstrap.min.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets//css/head.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

    <nav class="navbar navbar-expand-sm head">

        <div class="container-fluid">
            <img class="navbar-brand" src="../assets/fotos/Imagem.png">
            <h3 class="text-white position-absolute" style="left: 110px;">HEMATOMOZ</h3>
            <!-- Links -->
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout ()</a>
                </li>
            </ul>
        </div>

    </nav>

    <div class="container-fluid d-flex align-items-center p-0">

        <div class="container sidebar m-0">

            <nav class="navbar">

                <h4 class="mx-auto dash my-2">Dashboard</h4>

                <span class="text-white w-100 mx-auto border my-3"></span>

                <div class="container-fluid">
                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Doacoes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Transfusoes</a>
                        </li>
                        

                    </ul>
                </div>

                <span class="text-white w-100 border my-3"></span>
                <div class="container-fluid">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Doadores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pacientes</a>
                        </li>

                    </ul>
                </div>

                <span class="text-white w-100 border my-3"></span>
                <div class="container-fluid">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../views/VerFuncionarios.php"><i class="fa-solid fa-user-doctor m"></i> Funcionarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/AdicionarFuncionario.php">Novo Funcionario</a>
                        </li>

                    </ul>
                </div>

            </nav>

        </div>

        