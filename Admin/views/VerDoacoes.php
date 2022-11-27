<?php include_once './head2.php'; ?>

<?php
include_once '../models/Doador.php';

$doacoes = new Doador();

$dados = $doacoes->selecAllDoacoes();

if (isset($_GET['data'])) {
    $dados2 = $doacoes->selecAllDoacoes2($_GET['data']);
} else {
    $dados2 = $doacoes->selecAllDoacoes3();
}

?>


<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-user-doctor m"></i> Doacoes</h3>

    <?php if (isset($_SESSION['sucesso'])) { ?>
        <div class="alert alert-success alert-dismissible w-50 mx-auto">
            <button type="button" class="btn btn-close" data-bs-dismiss="alert"></button>
            <?php echo $_SESSION['sucesso'];
            unset($_SESSION['sucesso']) ?>
        </div>
    <?php } ?>

    <div class="container clearfix my-3">
        <small style="color: #da4a4a;" class="ms-3 float-start"><?php echo date("d-m-Y") . "(Hoje)" ?></small>
        <a href="./NovaDoacao.php" class="btn float-end guardar">+Nova Doacao</a>
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
                        <td><?php echo $value->local_doacao; ?></td>
                        <td><?php echo $value->quantidade_sangue; ?></td>
                        <td><?php echo $value->estado; ?></td>
                        <td><?php echo $value->nomeM; ?></td>
                        <td>
                            <a href=""><i class="fa-solid fa-circle-info"></i></a>

                        </td>

                    </tr>


                <?php $conta++;
                }
                ?>

            </tbody>


        </table>

    </div>

    <select class="escolha float-start p-2 mt-5 mb-3 ms-3" style="width: 150px; height: auto; font-size: 12px;">
        <option value="">Todas outras</option>
        <option value="<?php echo date("Y-m-d", strtotime("last week")) ?>">ultima semana</option>
        <option value="<?php echo date("Y-m-d", strtotime("last month")) ?>">ultimo mes</option>

    </select>

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
                foreach ($dados2 as $key => $value) {
                ?>
                    <tr>

                        <td><?php echo $conta; ?></td>
                        <td><?php echo $value->nomeD; ?></td>
                        <td><?php echo $value->data_doacao; ?></td>
                        <td><?php echo $value->local_doacao; ?></td>
                        <td><?php echo $value->quantidade_sangue; ?></td>
                        <td><?php echo $value->estado; ?></td>
                        <td><?php echo $value->nomeM; ?></td>
                        <td>
                            <a href=""><i class="fa-solid fa-circle-info"></i></a>

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