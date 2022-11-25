<?php include_once './head2.php'; ?>

<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-user-plus"></i> Novo Funcionario</h3>

    <?php if (isset($_SESSION['erro'])) { ?>
        <div class="alert alert-danger alert-dismissible w-50 mx-auto">
            <button type="button" class="btn btn-close" data-bs-dismiss="alert"></button>
            <?php echo $_SESSION['erro'];
            unset($_SESSION['erro']) ?>
        </div>
    <?php } ?>

    <form action="../controllers/AdicionarFuncionarioController.php" method="POST">

        <div class="container-fluid d-flex">
            <div class="container">
                <input type="text" class="form-control input1" name="nome" placeholder="Nome Completo" required>
                <input type="date" class="form-control input1" name="data_nascimento" placeholder="Data de Nascimento" required>
                <input type="text" class="form-control input1" name="nacionalidade" placeholder="Nacionalidade" required>
                <div class="container-fluid d-flex p-0">
                    <input type="text" class="form-control input1 me-2" name="tel1" placeholder="Telefone 1" required>
                    <input type="text" class="form-control input1" name="tel2" placeholder="Telefone 2">
                </div>
                <input type="number" class="form-control input1" name="anos_experiencia" placeholder="Anos de Experiencia">
                <input type="email" class="form-control input1" name="email" placeholder="Email">
            </div>

            <div class="container">
                <div class="container-fluid p-0 d-flex">
                    <select class="form-select w-25 me-2 input1" name="sexo" required>
                        <option>Sexo</option>
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select>
                    <input type="number" class="form-control w-75 input1" name="salario" placeholder="Salario" required>

                </div>
                <input type="text" class="form-control input1" name="nr_bi" placeholder="Numero de B.I" required>
                <textarea class="form-control input1" placeholder="Endereco" name="endereco" style="height: 150px;"></textarea>

                <select class="form-select input1" name="perfil" required>
                    <option>Perfil</option>
                    <option value="admin">Administrador</option>
                    <option value="assistente">Assistente</option>
                    <option value="medico">Medico</option>
                </select>

                <div class="container clearfix p-0">
                    <button type="submit" class="btn guardar mt-4 float-end"><i class="fa-solid fa-floppy-disk"></i> Registrar</button>
                </div>
            </div>

        </div>

    </form>

</div>

</div>