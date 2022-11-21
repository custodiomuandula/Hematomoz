<?php
include '../views/head.php';
?>
<div class="body">
    <div class="container text-center" style="width:500px ;">
        <h1> <span style="color:#da4a4a ;">Pre-triangem</span> e Agendamento de Doação</h1>
    </div>
    <div class="container">
        <form action="" style="color:#55B1B8;">
            <div class="container mt-5">
                <label for="">possui anemia??</label>
                <div class="container mt-3">Sim <input type="radio"  name="radio"></div>
                <div class="container mt-3"> Não <input type="radio" name="radio"></div>
            </div>

            <div class="container d-flex">
                <div class="container mt-3 ">
                    <label for="">Descrava os seus Habito</label>
                    <textarea name="morada" cols="30" rows="10" class="form-control  mt-3" required placeholder="Exemplo nao: Não bebe, Pratico despotos gosto de cumida com muito sal"></textarea>
                </div>

                <div class="container mt-5 d-flex justify-content-end text-center">
                    <div class="mt-5">
                        <div class="bord bord-soted border rounded">
                            <!-- <label for="" class="mt-3 ">Selecione o dia que pretende fazer adação:</label>
                        <input type="date"> -->
                            <li class="nav-item dropdown"  style="background-color:white ;color:#55B1B8 ;list-style:none ">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <span style="color:#55B1B8 ;">Selecione o dia que pretende fazer adação:</span> 
                                </a>
                                <ul class="dropdown-menu dropdown-menu-white">
                                    <li><a class="dropdown-item" href="./Agendar_doacao.php"></a></li>
                                    <li><a class="dropdown-item" href="#"></a></li>
                                </ul>
                            </li>
                        </div>
                        <div class="container  mt-5">
                            <button class="btn btn-success" type="submit" style="background-color:#55B1B8;"> <i class="fa-solid fa-paper-plane mx-2"></i> Agendar</button>

                        </div>
                    </div>

                </div>
        </form>
    </div>
</div>