
<?php include_once '../views/head2.php'; ?>

<?php
// include_once '../models/Doador.php';

// $doador = new Doador();
// $nome = $doador->selectOne($_GET['id'])->nome;
?>

<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-user-pen"></i> Nova Doacao</h3>

  

    <form action="../controllers/AdicionarDoacaoController.php" method="POST">

        <input type="hidden" name="id" value="">
        <div class="container w-75">
            <div class="container">
                
                <input type="date" class="form-control input1" name="" value="<?php echo date("Y-m-d"); ?>" readonly>
                <input type="text" class="form-control input1" name="local_doacao" placeholder="Local da Doacao" required>

                <input type="number" class="form-control input1" name="quantidade_sangue" placeholder="Quantidade de Sangue(litros)">
                <input type="number" class="form-control input1" name="quantidade_sangue" placeholder="Quantidade de Sangue(litros)">
            </div>

            <div class="container clearfix p-0">
                <button type="submit" class="btn guardar mt-4 float-end"><i class="fa-solid fa-floppy-disk"></i> Registrar</button>
            </div>
    </form>

</div>

</div>