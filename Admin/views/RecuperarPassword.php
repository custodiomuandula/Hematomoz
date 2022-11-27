<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Login</title>
</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">

        <div class="container principal">
            <div class="container d-flex justify-content-center">
                <img src="../assets/fotos/Imagem.png" class="imagem">
            </div>

            <div class="container w-75 text-center">
                <p class="mensagem ">Banco de Sangue empregado no salvamento de vidas
                    e colectando sangue por todo pais e distribuindo pelo
                    país inteiro!!
                </p>
                <h5 class="" style="color: #DA4A4A; font-weight: 700;">Doe Sangue, Salve vidas</h5>
            </div>
            <?php if (isset($_SESSION['sucesso'])) { ?>
                <div class="alert alert-success alert-dismissible w-50 mx-auto">
                    <button type="button" class="btn btn-close" data-bs-dismiss="alert"></button>
                    <?php echo $_SESSION['sucesso'];
                    unset($_SESSION['sucesso']); ?>
                </div>
                <?php } else {
                if (isset($_SESSION['erro'])) { ?>
                    <div class="alert alert-danger alert-dismissible w-50 mx-auto">
                        <button type="button" class="btn btn-close" data-bs-dismiss="alert"></button>
                        <?php echo $_SESSION['erro'];
                        unset($_SESSION['erro']) ?>
                    </div>
            <?php }
            } ?>

            <div class="container w-50 mt-5">
                <form action="../controllers/RecuperarPassword.php" method="POST" class="">

                    <input type="email" class="form-control mb-3" name="email" placeholder="Introduza seu email" required>
                    <input type="password" class="form-control mb-3" name="password" placeholder="Novo password" required>
                    <input type="password" class="form-control mb-3" name="re_password" placeholder="Reescreva password" required>

                    <div class="conatiner">
                        <button class="btn login me-3" type="submit"><i class="fa-solid fa-check"></i> Confirmar</button>
                        <a class="btn cancelar" href="../index.php"><i class="fa-solid fa-xmark"></i> Cancelar</a>
                    </div>
                </form>

            </div>

        </div>

    </div>

</body>

</html>