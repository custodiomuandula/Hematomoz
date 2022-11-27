<?php
include 'head2.php';
include_once '../models/Requisicao.php';
include_once '../models/Doador.php';
include_once '../models/Transfusao.php';
?>

<?php

$requisicao = new Requisicao();
$doacoes = new Doador();
$transfusao = new Transfusao();

$contaRequisicao = $requisicao->count();
$requisitantes = $requisicao->selectToday();

$nrdoacoes = $doacoes->countDoacoes();
$nragendamento = $doacoes->count();
$locaisDoacoes = $doacoes->selectToday();
$quantidadeSangue = $doacoes->selectQuantidade()->quant;
$nrtransfusao = $transfusao->count();
?>

<div class="container-fluid otherside">
  <div class="container  d-flex">


    <div id="a" class="w-50 mt-4 div1 border bg-light ms-3 border border-danger rounded">

      <h3 style="color:#D26464 ;" class="mt-3 ms-3 fw-bold"> <i class="fa-solid fa-hand-holding-droplet ms-2"></i> Estatisticas</h3>
      <p class="ms-4 mt-3">Numero de Doações de (hoje): <?php echo $nrdoacoes ?></p>
      <p class="ms-4">Numero de trasfuções (hoje): <?php echo $nrtransfusao ?></p>
      <p class="ms-4">Quantidade de sangue adiquirido(hoje): <?php echo $quantidadeSangue ?> litros</p>
      <p class="ms-4">Testes realisados:10</p>
      <p></p>
      <div class="d-flex justify-content-end " style="margin-top:-10px ;"><a href="./Ver_sangue.php" style="color:#D26464 "><i class="fa-solid fa-arrow-right me-2"></i></a></div>

    </div>

    <div id="a" class="mt-4 w-50 div2 border bg-light ms-3 border-danger rounded ">

      <h3 style="color:#D26464 ;" class="fw-bold ms-3 mt-3"> <i class="fa-solid fa-hand-holding-droplet ms-2"></i> Stock de Sangue</h3>
      <p class="ms-4">Bolsas de sangue diponiveis: 100</p>
      <div class="d-flex w-75 text-center ms-5">
        <div class="container">
          <span>
            <P class="fw-bold border border-danger rounded" style="color:white;background-color: #da4a4a;width: 30px;">A</P>
          </span>
          <P class="fw-bold border border-danger rounded" style="color:white;background-color: #da4a4a;width: 30px;">A+</P>
          <P class="fw-bold border border-danger rounded" style="color:white;background-color: #da4a4a;width: 30px;">A-</P>

        </div>
        <div class="container">
          <P class="fw-bold border border-danger rounded" style="color:white;background-color: #da4a4a;width: 30px;">B</P>
          <P class="fw-bold border border-danger rounded" style="color:white;background-color: #da4a4a;width: 30px;">B+</P>
          <P class="fw-bold border border-danger rounded" style="color:white;background-color: #da4a4a;width: 30px;">B-</P>

        </div>
        <div class="container">
          <P class="fw-bold border border-danger rounded" style="color:white;background-color: #da4a4a;width: 35px;">AB</P>
          <P class="fw-bold border border-danger rounded" style="color:white;background-color: #da4a4a;width: 35px;">AB+</P>
          <P class="fw-bold border border-danger rounded" style="color:white;background-color: #da4a4a;width: 35px;">AB-</P>

        </div>
        <div class="container">
          <P class="fw-bold border border-danger rounded" style="color:white;background-color: #da4a4a;width: 30px;">O</P>
          <P class="fw-bold border border-danger rounded" style="color:white;background-color: #da4a4a;width: 30px;">O+</P>
          <P class="fw-bold border border-danger rounded" style="color:white;background-color: #da4a4a;width: 30px;">O-</P>

        </div>


      </div>
      <div class="d-flex justify-content-end " style="margin-top:-10px  ;color:#D26464 ;"> <a href="./Ver_sangue.php" style="color:#D26464 "><i class="fa-solid fa-arrow-right me-2"></i></a></div>
    </div>



  </div>

  <div class="container d-flex mt-3">

    <div id="a" class="mt-2 w-50 div3 bg-light ms-3 border border-danger rounded ">

      <h3 style="color:#D26464 ;" class="fw-bold mt-3 ms-3"> <i class="fa-solid fa-calendar-week ms-2"></i> Agendamento de Doação</h3>
      <p class="ms-4"> Data: <?php echo date("d-m-Y"); ?></p>
      <p class="ms-4">Numero de Agendamento: <?php echo $nragendamento ?></p>
      <h5 class="ms-4">Locais de Doações</h5>
      <p class="ms-4">
        <?php foreach ($locaisDoacoes as $key => $value) {
          echo $value->local_doacao . ", ";
        } ?>
      </p>

      <div class="d-flex justify-content-end " style="margin-top:-20px ;"><a href="./Ver_sangue.php" style="color:#D26464 "><i class="fa-solid fa-arrow-right me-2"></i></a></div>

    </div>

    <div id="a" class="mt-2 w-50 bg-light ms-3 border border-danger rounded div4"></a>

      <h3 style="color:#D26464 ;" class="fw-bold mt-3 ms-3"> <i class="fa-solid fa-calendar-week ms-2"></i> Requisições de Doação</h3>
      <p class="ms-4"> Data: <?php echo date("d-m-Y"); ?></p>
      <h6 class="ms-4">Novas Requisições (<?php echo $contaRequisicao; ?>)</h6>
      <h5 class="ms-4">Entidades Requisitantes: </h5>
      <p class="ms-4">
        <?php foreach ($requisitantes as $key => $value) {
          echo $value->nome_instituicao . ", ";
        } ?>
      </p>
      <div class="d-flex justify-content-end " style="margin-top:90px ;"><a href="./Requisicao_sangue.php" style="color:#D26464 "><i class="fa-solid fa-arrow-right me-2"></i></a></div>

    </div>



  </div>




</div>
</div>