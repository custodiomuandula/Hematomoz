
<?php include_once './head2.php'; ?>

<?php
include_once '../models/Paciente.php';

$func = new Paciente();

$dados = $func->selecAll();

?>

<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-user-injured"></i> Pacientes</h3>

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

    <div class="container clearfix mb-5">

        <a href="./NovoPaciente.php" class="btn float-start guardar">+Novo Paciente</a>
        <input type="search" id="pesquisa" onkeyup="pesquisa(this.value)" class="form-control escolha float-end" placeholder="pesquise aqui...">

    </div>

    <div class="container">
        <table class="table table-striped">

            <thead>
                <th>Nr</th>
                <th>Nome</th>
                <th>Tipo Sanguineo</th>
                <th>Data de Nascimento</th>
                <th>Sexo</th>
                <th>Telefone</th>
                <th>Email</th>
            </thead>

            <tbody id="body">

                <?php $conta = 1;
                foreach ($dados as $key => $value) { ?>
                    <tr>
                        <td><?php echo $conta; ?></td>
                        <td><?php echo $value->nome; ?></td>
                        <td><?php echo $value->tipo_sanguineo; ?></td>
                        <td><?php echo $value->data_nascimento; ?></td>
                        <td><?php echo $value->sexo; ?></td>
                        <td><?php echo $value->tel1 . " / " . $value->tel2; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td>
                            <a href=""><i class="fa-solid fa-circle-info"></i></a>
                            <a href="../views/EditarPaciente.php?id=<?php echo $value->id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="" data-bs-toggle='modal' data-bs-target="#delete<?php echo $value->id ?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                    <div class="modal" id="delete<?php echo $value->id ?>">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> <i class="fa-solid fa-trash-can"></i> Apagar Paciente</h4>
                                </div>

                                <div class="modal-body">
                                    Deseja apagar o Paciente <?php echo $value->nome ?> ?
                                </div>

                                <div class="modal-footer">
                                    <a href="../controllers/DeletePacienteController.php?id=<?php echo $value->id ?>" class="btn btn-danger">Sim</a>
                                    <button type="button" data-bs-dismiss="modal" class="btn btn-secondary">Não</button>
                                </div>
                            </div>

                        </div>
                    </div>

                <?php $conta++;
                } ?>

            </tbody>


        </table>

    </div>

</div>

</div>

<script>
    function pesquisa(str) {


        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            document.getElementById("body").innerHTML = this.responseText;
        }
        xmlhttp.open("GET", "../controllers/SearchController.php?nome=" + str + "&perfil=paciente");
        xmlhttp.send();

    }
</script>