<?php include_once '../views/head2.php'; ?>

<?php 
include_once '../models/Requisicao.php';

$req = new Requisicao();

$dados = $req->selecAll();

?>


<div class="container otherside">

<h3 class="text-center my-4 novofunc" style="font-weight: 700;">Requisicoes de Sangue</h3>


<div class="container">
    <table class="table table-striped">

        <thead>
            <th>Nr</th>
            <th>Nome da Intituição</th>
            <th>Data da Requisição</th>
            <th>Data da Entrega</th>
            <th>Estado</th>
        </thead>

        <tbody>

            <?php $conta = 1;
            foreach ($dados as $key => $value) { ?>
                <tr>
                    <td><?php echo $conta; ?></td>
                    <td><?php echo $value->nome_instituicao; ?></td>
                    <td><?php echo $value->data_requisicao; ?></td>
                    <td><?php echo $value->data_entrega; ?></td>
                    <td><?php echo $value->estado; ?></td>
                    <td>
                        <a href="./Requisicoes_info.php?id=<?php echo $value->reqid ?>"><i class="fa-solid fa-circle-info"></i></a>
                    </td>
                </tr>

            <?php $conta++;
            } ?>

        </tbody>


    </table>

</div>

</div>

</div>