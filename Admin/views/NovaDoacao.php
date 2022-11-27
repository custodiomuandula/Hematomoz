<?php include_once './head2.php'; ?>

<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-user-pen"></i> Nova Doacao</h3>

    <?php if (isset($_SESSION['erro'])) { ?>
        <div class="alert alert-danger alert-dismissible w-50 mx-auto">
            <button type="button" class="btn btn-close" data-bs-dismiss="alert"></button>
            <?php echo $_SESSION['erro'];
            unset($_SESSION['erro']) ?>
        </div>
    <?php } ?>

    <form action="../controllers/AdicionarDoacaoController.php" method="POST">

        <div class="container-fluid d-flex">
            <div class="container">
                <input type="text" class="form-control input1" name="nome" placeholder="Nome Completo" required>
                <input type="date" class="form-control input1" name="" value="<?php echo date("Y-m-d"); ?>" readonly>
                <input type="text" class="form-control input1" name="local_doacao" placeholder="Local da Doacao" required>

                <input type="number" class="form-control input1" name="quantidade_sangue" placeholder="Quantidade de Sangue(litros)">
            </div>

            <div class="container">

                <?php if (isset($_GET['id'])) { ?>
                    <select class="form-select w-25 me-2 input1 " name="sexo" required>
                        <option><?php ?></option>
                    </select>
                <?php } ?>


                <input type="text" class="form-control input1" name="nr_documento" placeholder="Numero de Documento" required>
                <textarea class="form-control input1" placeholder="Endereco" name="endereco" style="height: 115px;"></textarea>


                <div class="container clearfix p-0">
                    <button type="submit" class="btn guardar mt-4 float-end"><i class="fa-solid fa-floppy-disk"></i> Registrar</button>
                </div>
            </div>

        </div>

    </form>

</div>

</div>