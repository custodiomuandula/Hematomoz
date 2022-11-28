<?php include_once './head2.php'; ?>

<?php
include_once '../models/Paciente.php';

$func = new Paciente();

$dados = $func->selectOne($_GET['id']);

?>

<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-user-pen"></i> Editar Paciente</h3>

    <?php if (isset($_SESSION['erro'])) { ?>
        <div class="alert alert-danger alert-dismissible w-50 mx-auto">
            <button type="button" class="btn btn-close" data-bs-dismiss="alert"></button>
            <?php echo $_SESSION['erro'];
            unset($_SESSION['erro']) ?>
        </div>
    <?php } ?>

    <form action="../controllers/EditarPacienteController.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $dados->id ?>">
        <div class="container-fluid d-flex">
            <div class="container">
                <input type="text" class="form-control input1" name="nome" placeholder="Nome Completo" required value="<?php echo $dados->nome ?>">
                <input type="date" class="form-control input1" name="data_nascimento" placeholder="Data de Nascimento" required value="<?php echo $dados->data_nascimento ?>">
                <input type="text" class="form-control input1" name="pais_nascimento" placeholder="Pais de Nascimento" required value="<?php echo $dados->pais_nascimento ?>">
                <div class="container-fluid d-flex p-0">
                    <input type="text" class="form-control input1 me-2" name="tel1" placeholder="Telefone 1" required value="<?php echo $dados->tel1 ?>">
                    <input type="text" class="form-control input1" name="tel2" placeholder="Telefone 2" value="<?php echo $dados->tel2 ?>">
                </div>
                <input type="email" class="form-control input1" name="email" placeholder="Email" required value="<?php echo $dados->email ?>">
            </div>

            <div class="container">
                <select class="form-select w-25 me-2 input1 " name="sexo" required>
                    <option>Sexo</option>
                    <option <?php if ($dados->sexo == "M") { ?> selected <?php } ?> value="M">M</option>
                    <option <?php if ($dados->sexo == "F") { ?> selected <?php } ?> value="F">F</option>
                </select>

                <select class="form-select me-2 input1" name="tipo_documento" required>
                    <option>Tipo de documento</option>
                    <option <?php if ($dados->tipo_documento == "B.I") { ?> selected <?php } ?> value="B.I">B.I</option>
                    <option <?php if ($dados->tipo_documento == "Cedula") { ?> selected <?php } ?> value="Cedula">Cedula</option>
                    <option <?php if ($dados->tipo_documento == "Cartao de Eleitor") { ?> selected <?php } ?> value="Cartao de Eleitor">Cartao de Eleitor</option>
                    <option <?php if ($dados->tipo_documento == "NUIT") { ?> selected <?php } ?> value="NUIT">NUIT</option>
                </select>
                <input type="text" class="form-control input1" name="nr_documento" placeholder="Numero de Documento" required value="<?php echo $dados->nr_documento ?>">
                <textarea class="form-control input1" placeholder="Endereco" name="endereco" style="height: 115px;" required><?php echo $dados->endereco ?></textarea>


                <div class="container clearfix p-0">
                    <button type="submit" class="btn guardar mt-4 float-end"><i class="fa-solid fa-floppy-disk"></i> Actualizar</button>
                </div>
            </div>

        </div>

    </form>

</div>

</div>