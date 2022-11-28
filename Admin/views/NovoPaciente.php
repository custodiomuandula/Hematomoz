<?php include_once './head2.php'; ?>


<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-user-pen"></i> Novo Paciente</h3>

    <?php if (isset($_SESSION['erro'])) { ?>
        <div class="alert alert-danger alert-dismissible w-50 mx-auto">
            <button type="button" class="btn btn-close" data-bs-dismiss="alert"></button>
            <?php echo $_SESSION['erro'];
            unset($_SESSION['erro']) ?>
        </div>
    <?php } ?>

    <form action="../controllers/AdicionarPacienteController.php" method="POST">

        <div class="container-fluid d-flex">
            <div class="container">
                <input type="text" class="form-control input1" name="nome" placeholder="Nome Completo" required>
                <input type="date" class="form-control input1" name="data_nascimento" placeholder="Data de Nascimento" required>
                <input type="text" class="form-control input1" name="pais_nascimento" placeholder="Pais de Nascimento" required>
                <div class="container-fluid d-flex p-0">
                    <input type="text" class="form-control input1 me-2" name="tel1" placeholder="Telefone 1" required>
                    <input type="text" class="form-control input1" name="tel2" placeholder="Telefone 2">
                </div>
                <input type="email" class="form-control input1" name="email" placeholder="Email">
            </div>

            <div class="container">
                <select class="form-select w-25 me-2 input1 " name="sexo" required>
                    <option>Sexo</option>
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>

                <select class="form-select me-2 input1" name="tipo_documento" required>
                    <option>Tipo de documento</option>
                    <option value="M">B.I</option>
                    <option value="F">Cedula</option>
                    <option value="F">Cartao de Eleitor</option>
                    <option value="F">NUIT</option>
                </select>
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