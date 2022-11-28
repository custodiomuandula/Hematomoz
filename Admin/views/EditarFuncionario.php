<?php include_once './head2.php'; ?>

<?php
include_once '../models/Funcionario.php';

$func = new Funcionario();

if (isset($_GET['id'])) {
    $dados = $func->selectOne($_GET['id']);
}


?>



<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-pen-to-square"></i> Editar Funcionario</h3>

    <?php if (isset($_SESSION['erro'])) { ?>
        <div class="alert alert-danger alert-dismissible w-50 mx-auto">
            <button type="button" class="btn btn-close" data-bs-dismiss="alert"></button>
            <?php echo $_SESSION['erro'];
            unset($_SESSION['erro']) ?>
        </div>
    <?php } ?>

    <form action="../controllers/EditarFuncionarioControler.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $dados->funcid ?>">
        <div class="container-fluid d-flex">
            <div class="container">
                <input type="text" class="form-control input1" name="nome" placeholder="Nome Completo" required value="<?php echo $dados->nome ?>">
                <input type="date" class="form-control input1" name="data_nascimento" placeholder="Data de Nascimento" required value="<?php echo $dados->data_nascimento ?>">
                <input type="text" class="form-control input1" name="nacionalidade" placeholder="Nacionalidade" required value="<?php echo $dados->nacionalidade ?>">
                <div class="container-fluid d-flex p-0">
                    <input type="text" class="form-control input1 me-2" name="tel1" placeholder="Telefone 1" required value="<?php echo $dados->tel1 ?>">
                    <input type="text" class="form-control input1" name="tel2" placeholder="Telefone 2" value="<?php echo $dados->tel2 ?>">
                </div>
                <input type="number" class="form-control input1" name="anos_experiencia" placeholder="Anos de Experiencia" value="<?php echo $dados->anos_experiencia ?>">
                <input type="email" class="form-control input1" name="email" placeholder="Email" value="<?php echo $dados->email ?>">
            </div>

            <div class="container">
                <div class="container-fluid p-0 d-flex">
                    <select class="form-select w-25 me-2 input1" name="sexo" required>
                        <option>Sexo</option>
                        <option <?php if ($dados->sexo == "M") { ?> selected <?php } ?> value="M">M</option>
                        <option <?php if ($dados->sexo == "F") { ?> selected <?php } ?> value="F">F</option>
                    </select>
                    <input type="number" class="form-control w-75 input1" name="salario" placeholder="Salario" required value="<?php echo $dados->salario ?>">

                </div>
                <input type="text" class="form-control input1" name="nr_bi" placeholder="Numero de B.I" required value="<?php echo $dados->nr_bi ?>">
                <textarea class="form-control input1" placeholder="Endereco" name="endereco" style="height: 150px;"><?php echo $dados->endereco ?></textarea>

                <select class="form-select input1" name="perfil" required>
                    <option>Perfil</option>
                    <option <?php if ($dados->perfil == "admin") { ?> selected <?php } ?> value="admin">Administrador</option>
                    <option <?php if ($dados->perfil == "assistente") { ?> selected <?php } ?> value="assistente">Assistente</option>
                    <option <?php if ($dados->perfil == "medico") { ?> selected <?php } ?> value="medico">Medico</option>
                </select>

                <div class="container clearfix p-0">
                    <button type="submit" class="btn guardar mt-4 float-end"><i class="fa-solid fa-floppy-disk"></i> Actualizar</button>
                </div>
            </div>

        </div>

    </form>

</div>

</div>