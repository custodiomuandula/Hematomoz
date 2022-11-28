<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets//css/bootstrap.min.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets//css/head.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
    .logout:hover {
        color: #55B1B8 !important;
    }
    .nav-link:hover{

color: #55B1B8 !important;
    }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm head">

        <div class="container-fluid">
            <img class="navbar-brand" src="../assets/fotos/Imagem.png">
            <a href="./Menu.php" class="text-white position-absolute hema" style="left: 110px;">HEMATOMOZ</a>
            <!-- Links -->
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link logout" href="../controllers/logoutController.php">Logout <?php echo $_SESSION['username'] ?></a>
                </li>
            </ul>
        </div>

    </nav>

    <div class="container-fluid d-flex align-items-center p-0">

        <div class="container sidebar m-0">

            <nav class="navbar">

                <h4 class="mx-auto dash my-3"> Dashboard</a></h4>

                <span class="text-white w-100 mx-auto border my-3"></span>

                <div class="container-fluid">
                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./VerDoacoes.php"><i class="fa-solid fa-hand-holding-heart"></i> Doacoes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./Transfusao.php"><i class="fa-solid fa-heart-pulse"></i> Transfusoes</a>
                        </li>
                        

                    </ul>
                </div>

                <span class="text-white w-100 border my-3"></span>
                <div class="container-fluid">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./VerDoadores.php"><i class="fa-solid fa-user-plus"></i> Doadores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./VerPacientes.php"><i class="fa-solid fa-user-injured"></i> Pacientes</a>
                        </li>

                    </ul>
                </div>

                <span class="text-white w-100 border my-3"></span>
                <div class="container-fluid">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../views/VerFuncionarios.php"><i class="fa-solid fa-user-doctor"></i> Funcionarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/NovoFuncionario.php"><i class="fa-solid fa-user-pen"></i> Novo Funcionario</a>
                        </li>

                    </ul>
                </div>

            </nav>

        </div>

        