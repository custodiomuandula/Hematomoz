
<?php
include_once './head2.php';
include_once '../models/Doador.php';
?>

<?php

$doador = new Doador();
$id = $_GET['id'];
$doador1 = $doador->selectOne($id);
$doador2 = $doador->selectOneTriagem($id);
$doador3 = $doador->selectOneAgendamento($id);
$doador4 = $doador->selectOneDoacao($id);
$doador5 = $doador->selectLastDoacao($id);
?>

<div class="container otherside" style="overflow-y: scroll;">

  <h3 class="text-center mt-3 novofunc" style="font-weight: 700;"><i class="fa-solid fa-user-plus"></i> Doador</h3>
  <h5 class=" text-center mt-3 novofunc" style="font-weight: 700;">(<?php echo $doador1->nome ?>)</h5>
  <?php if ($doador5 != "") { ?> <p class="ms-3 text-center"><small>Ultima Doacao: 11/10/2022</small></p> <?php } ?>
  <?php if (!empty($doador2)) { ?>
    <a href="./NovaDoacao.php?id=<?php echo $id ?>" class="btn guardar" style="font-size: 15px;">+Registrar nova doacao</a>
  <?php } else { ?>
    <a href="./NovaPreTriagem.php?id=<?php echo $id ?>" class="btn guardar" style="font-size: 15px;">+Registrar dados de Pre-Triagem</a>
  <?php } ?>

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

  <div class="container d-flex align-items-center mt-5">
    <p class="mx-3 mt-3"><small>Dados Pessoais</small></p>
    <a href="./EditarDoador.php?id=<?php echo $id ?>" class="novofunc"><i class="fa-solid fa-pen-to-square"></i></a>
  </div>
  <div class="container-fluid d-flex ">
    <div class="container " style="width: 300px;">

      <p>Tipo Sanguineo: <b><?php echo $doador1->tipo_sanguineo ?></b></p>
      <p>Data de Nascimento: <b><?php echo $doador1->data_nascimento ?></b></p>
      <p>Document: <b><?php echo $doador1->nr_documento . " ($doador1->tipo_documento)" ?></b></p>
      <p>Telefone: <b><?php echo $doador1->tel1 . " / " . $doador1->tel2 ?></b></p>

    </div>

    <div class="container" style="width: 300px;">
      <p>Pais de Nascimento: <b><?php echo $doador1->pais_nascimento ?></b></p>
      <p>Endereco: <b><?php echo $doador1->endereco ?></b></p>
      <p>Email: <b><?php echo $doador1->email ?></b></p>
    </div>

  </div>

  <p class="container border my-4 w-75" style="border-color: #D26464 !important"></p>

  <?php foreach ($doador2 as $key => $value) { ?>
    <div class="container d-flex align-items-center">
      <p class="mx-3 mt-3"><small>Pre-triagem</small></p>
      <a href="" class="novofunc"><i class="fa-solid fa-pen-to-square"></i></a>
    </div>
    <div class="container ms-5 d-flex justify-content-center">
      <div class="container p-2">


        <p>Anemico: <b><?php echo $value->anemico ?></b></p>
        <p>Consome Alcool: <b><?php echo $value->consumo_alcool ?></b></p>
        <p>Pratica Exercicios Fisicos: <b><?php echo $value->exercicios_fisicos ?></b></p>
        <p>Habitos Alimentares: </p>
        <p><b><?php echo $value->habitos_alimentares ?></b></p>
      </div>

      <div class="container border-start p-2" style="border-color: #D26464 !important">
        <p>Altura: <b><?php echo $value->altura . " m" ?></b></p>
        <p>Peso: <b><?php echo $value->peso . " kg" ?></b></p>
        <p>Historico de Doencas: </p>
        <p><b><?php echo $value->historico_doencas ?></b></p>
      </div>

      <div class="container border-start p-2" style="border-color: #D26464 !important">
        <p>Estado de Saude: <b><?php echo $value->estado_saude ?></b></p>
        <p>Temperatura: <b><?php echo $value->temperatura . " C" ?></b></p>
        <p>Pressao Arterial: <b><?php echo $value->pressao_arterial ?></b></p>

      </div>

    </div>
  <?php } ?>
  <p class="container border my-4 w-75" style="border-color: #D26464 !important"></p>

  <div class="container mb-5 w-50 d-flex">
    <table class="table table-striped">

      <thead>
        <th>Agendamentos Efectuados</th>
      </thead>

      <tbody>
        <?php foreach ($doador3 as $key => $value) { ?>
          <tr>
            <td><?php echo $value->data_doacao ?></td>
          </tr>
        <?php } ?>
      </tbody>


    </table>

    <table class="table table-striped">

      <thead>
        <th>Doacoes Efectuadas</th>
      </thead>

      <tbody>
        <?php foreach ($doador4 as $key => $value) { ?>
          <tr>
            <td><?php echo $value->data_doacao ?></td>
          </tr>
        <?php } ?>
      </tbody>


    </table>
  </div>

</div>
</div>