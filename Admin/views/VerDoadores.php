
<?php include_once './head2.php'; ?>

<?php
include_once '../models/Doador.php';

$func = new Doador();

$dados = $func->selectAll();

if (isset($_GET['id'])) {
    echo $_GET['id'];
}
?>

<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-user-plus"></i> Doadores</h3>

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

        <a href="./NovoDoador.php" class="btn float-start guardar">+Novo Doador</a>
        <input type="search" onkeyup="pesquisa(this.value)" id="pesquisa" class="form-control escolha float-end" placeholder="pesquise aqui...">

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
                            <a href="./VerDoador.php?id=<?php echo $value->id ?>"><i class="fa-solid fa-circle-info">edit</i></a>
                            <a href="./EditarDoador.php?id=<?php echo $value->id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="" data-bs-toggle='modal' data-bs-target="#delete<?php echo $value->id ?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                    <div class="modal" id="delete<?php echo $value->id ?>">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"> <i class="fa-solid fa-trash-can"></i> Apagar Doador</h4>
                                </div>

                                <div class="modal-body">
                                    Deseja apagar o Doador <?php echo $value->nome ?> ?
                                </div>

                                <div class="modal-footer">
                                    <a href="../controllers/DeleteDoadorController.php?id=<?php echo $value->id ?>" class="btn btn-danger">Sim</a>
                                    <button type="button" data-bs-dismiss="modal" class="btn btn-secondary">N??o</button>
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
        xmlhttp.open("GET", "../controllers/SearchController.php?nome=" + str + "&perfil=doador");
        xmlhttp.send();
    }
</script>