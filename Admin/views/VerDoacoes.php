
<?php include_once './head2.php'; ?>

<?php
include_once '../models/Doador.php';

$doacoes = new Doador();

$dados = $doacoes->selecAllDoacoes();

$dados2 = $doacoes->selecAllDoacoes3();
?>


<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-user-doctor m"></i> Doacoes</h3>
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

    <div class="container clearfix my-3">
        <small style="color: #da4a4a;" class="ms-3 float-start"><?php echo date("d-m-Y") . "(Hoje)" ?></small>

    </div>

    <div class="container">
        <table class="table table-striped">

            <thead>
                <th>Nr</th>
                <th>Doador</th>
                <th>Data de Doacao</th>
                <th>Local de Doacao</th>
                <th>Quantidade(litros)</th>
                <th>Estado</th>
                <th>Medico Responsavel</th>
            </thead>

            <tbody>

                <?php $conta = 1;
                foreach ($dados as $key => $value) {
                ?>
                    <tr>

                        <td><?php echo $conta; ?></td>
                        <td><?php echo $value->nomeD; ?></td>
                        <td><?php echo $value->data_doacao; ?></td>
                        <td><?php echo $value->local; ?></td>
                        <td><?php echo $value->quantidade_sangue; ?></td>
                        <td><?php echo $value->estado; ?></td>
                        <td><?php echo $value->nomeM; ?></td>
                        <td>
                            <a href=""><i class="fa-solid fa-circle-info"></i></a>
                            <a href="./EditarDoacao.php?id=<?php echo $value->doacaoId  ?>"><i class="fa-solid fa-pen-to-square">edit</i></a>
                        </td>

                    </tr>


                <?php $conta++;
                }
                ?>

            </tbody>


        </table>

    </div>

    <div class="container-fluid mt-5 d-flex">
        <div class="container float-start">
            <p class=""><small>Pesquise pela data:</small></p>
            <input type="date" class="escolha p-2" max="<?php echo date('Y-m-d') ?>">
        </div>

        <div class="container float-end">
            <p class="ms-5"><small>Pesquise pelo Nome:</small></p>
            <input type="search" class="escolha p-2 ms-5" placeholder="pesquise aqui...">
        </div>

    </div>

    <div class="container mt-3">
        <table class="table table-striped">

            <thead>
                <th>Nr</th>
                <th>Doador</th>
                <th>Data de Doacao</th>
                <th>Local de Doacao</th>
                <th>Quantidade(litros)</th>
                <th>Estado</th>
                <th>Medico Responsavel</th>
            </thead>

            <tbody>

                <?php $conta = 1;
                foreach ($dados2 as $key => $value) {
                ?>
                    <tr>

                        <td><?php echo $conta; ?></td>
                        <td><?php echo $value->nomeD; ?></td>
                        <td><?php echo $value->data_doacao; ?></td>
                        <td><?php echo $value->local; ?></td>
                        <td><?php echo $value->quantidade_sangue; ?></td>
                        <td><?php echo $value->estado; ?></td>
                        <td><?php echo $value->nomeM; ?></td>
                        <td>
                            <a href=""><i class="fa-solid fa-circle-info"></i></a>
                            <a href="./EditarDoacao.php?id=<?php echo $value->doacaoId  ?>"><i class="fa-solid fa-pen-to-square">edit</i></a>
                        </td>

                    </tr>


                <?php $conta++;
                }
                ?>

            </tbody>


        </table>

    </div>

</div>

</div>