<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../assets//css/bootstrap.min.css">
  <script src="../../assets/js/jquery.js"></script>
  <script src="../../assets/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../../assets/css/home_admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div class="content">

    <nav class="navbar navbar-expand-lg bg-light">
      <img src="../../assets/fotos/Imagem.jpg" alt="" class="logo">
      <div class="container-fluid">

        <div class="header-box">
          <h1 class="fs-4 fw-bold text-white">HemaTomoz</h1>
          <button class="btn close-btn d-md-none d-block px-1 py-o text-white"></button>
        </div>
        <a class="navbar-brand fw-bold" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" style="color:white ;">logout(custodio)</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>


    <div class="main-container d-flex m-o">

      <div class="sidebar" id="side_nav">

        <ul class="list-unstyled px-3 pt-3 pb-4 ">
          <li class="active"><a href="" class="text-decoration-none px-2 py-2 d-block">Menu</a></li>
          <hr class="h-color mx-2">
          <li class="oiu"><a href="./Agendar_doacao.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-hand-holding-droplet"></i>Agendar Doa????o</a></li>
          <li class="oiu"><a href="" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-shuffle"></i>Doa????es Pendentes</a></li>
        <hr class="h-color  mx-2">
        <li class=""><a href="./dados_doador.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-person"></i> Visualizar Dados</a></li>
          <li><a href="./AdicionarFuncionario.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-user-plus"></i> Historios de Doa????o</a></li>
         
          <hr class="h-color mx-2">
          <li><a href="" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-user-doctor m"></i>Proxima Doa????o</a></li>
          <li><a href="" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-user-doctor m"></i> Defini????es</a></li>
        </ul>


        <script>
          
        $(".sidebar ul li").on('click', function() {
          $(".sidebar ul li.active").removeClass('active');
          $(this).addClass('active');

        })
      </script>

      </div>



