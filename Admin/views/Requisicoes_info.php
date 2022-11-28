<?php include_once '../views/head2.php'; ?>


<?php
include_once '../models/Requisicao.php';

$req = new Requisicao();

if(isset($_GET['id'])){

$dados = $req->selectOne($_GET['id']);
$conteudo = $req->selectConteudo($_GET['id']);
}

?>


<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;">Requisicao de Sangue</h3>
    <h5 class="text-center novofunc mt-0" style="font-weight: 700;">(<?php echo $dados->nome_instituicao ?>)</h5>

    <small class="ms-5" style="color: #DA4A4A;">Estado: <?php echo $dados->estado ?></small>
    <div class="container d-flex mt-5 justify-content-center">
        <div class="container c1">

            <p class="ms-5 mt-3">Endereço: <span class="fw-bold"><?php echo $dados->reqendereco ?></span> </p>
            <p class="ms-5">Email: <span class="fw-bold"><?php echo $dados->reqemail ?></span> </p>
            <p class="ms-5">Contantos: <span class="fw-bold"><?php echo $dados->reqtel1." ou ".$dados->reqtel2 ?></span> </p>

            <a href="" class="btn abrir_documento ms-5 w-75">Abrir Documento</a>


        </div>

        <div class="container c2">
            <table class="w-50 table table-striped mx-auto" style="  border: 1px solid #D26464; border-collapse: collapse;color:#DA4A4A; ">
                <thead>
                    <th>Tipo de sangue</th>
                    <th>Quantidade</th>
                </thead>
                <tbody>
                    <?php foreach($conteudo as $key => $value){ ?>
                    <tr>
                        <td><?php echo $value->tipo_sanguineo ?></td>
                        <td><?php echo $value->quantidade ?> litros</td>
                        
                    </tr>
                    <?php } ?>
                </tbody>


            </table>
        </div>
    </div>

    <div class=" mt-5 clearfix">
        <a href="" class="btn guardar cancelar float-end me-5">Rejeitar</a>
        <a href="" class="btn guardar float-end me-3">Aceitar</a>
    </div>

</div>

</div>