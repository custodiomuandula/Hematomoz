
<?php
include '../../Admin/views/head2.php';
include_once '../models/Transfusao.php';
$transfusao = new Transfusao();

$dados = $transfusao->selectAll();
?>
<div class=" container otherside">

    <div class="conteiner mt-3">
        <h3 class="text-center novofunc" >Informação sobre Trasfusão<i class="fa-solid fa-hand-holding-heart ms-2"></i></h3>
        <table class="table table-striped ">
            <thead>
                <th>Nome dos pacientes</th>
                <th>Data da Trasfusão</th>
                <th>Nome do Hospital</th>
                <th>Status</th>
                <th>Medico Resposavel</th>
            </thead>

            <tbody>
              
            <?php $conta = 1;
                foreach ($dados as $key => $value) {
                ?>
                    <tr>  
                        <td><?php echo $value->pacNome; ?></td>
                        <td><?php echo $value->data_transfusao; ?></td>
                        <td><?php echo $value->local; ?></td>
                        <td><?php echo $value->estado; ?></td>
                        <td><?php echo $value->funcNome; ?></td>
                        
                       

                    </tr>


                <?php $conta++;
                }
                ?>



            </tbody>
        </table>

    </div>
</div>