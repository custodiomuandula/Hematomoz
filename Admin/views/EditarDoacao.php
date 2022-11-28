<?php include_once './head2.php'; ?>

<?php 
include_once '../models/Doador.php';

$doador = new Doador();
$dados = $doador->selectOneDoacao1($_GET['id']);
$nome = $doador->selectOne($_GET['id'])->nome;
?>

<?php

    if(!isset($_SESSION['username'])){
        header("location: ../index.php");
    }

?>

<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-user-pen"></i> Editar Doacao</h3>

    <?php if (isset($_SESSION['erro'])) { ?>
        <div class="alert alert-danger alert-dismissible w-50 mx-auto">
            <button type="button" class="btn btn-close" data-bs-dismiss="alert"></button>
            <?php echo $_SESSION['erro'];
            unset($_SESSION['erro']) ?>
        </div>
    <?php } ?>

    <form action="../controllers/EditarDoacaocontroller.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <div class="container w-75">
            <div class="container">
                <input type="text" class="form-control input1" name="nome" value="<?php echo $nome ?>" readonly>
                <input type="date" class="form-control input1" name="" value="<?php echo $dados->data_doacao ?>" readonly>
                <input type="text" class="form-control input1" name="local_doacao" placeholder="Local da Doacao" required value="<?php echo $dados->local ?>">
                <input type="number" class="form-control input1" name="quantidade_sangue" placeholder="Quantidade de Sangue(litros)" value="<?php echo $dados->quantidade_sangue ?>">
                <select class="input1 form-select" name="estado">
                    <option <?php if($dados->estado == "Aguardando"){ ?>selected <?php } ?> value="Aguardando">Aguardando</option>
                    <option <?php if($dados->estado == "Em teste"){ ?>selected <?php } ?> value="Em teste">Em teste</option>
                    <option <?php if($dados->estado == "Testado e Aceite"){ ?>selected <?php } ?> value="Testado e Aceite">Testado e Aceite</option>
                    <option <?php if($dados->estado == "Testado e Rejeitado"){ ?>selected <?php } ?>  value="Testado e Rejeitado">Testado e Rejeitado</option>
                </select>
            </div>

        <div class="container clearfix p-0">
            <button type="submit" class="btn guardar mt-4 float-end"><i class="fa-solid fa-floppy-disk"></i> Actualizar</button>
        </div>
    </form>

</div>

</div>