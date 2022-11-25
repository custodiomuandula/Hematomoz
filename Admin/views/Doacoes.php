<?php
include '../../Admin/views/head.php';
?>

<div class="dashboard-content">

    <div class="container mt-2">
        <div style="color:#DA4A4A ;">
            <h3 class="text-center"><i class="fa-solid fa-user-plus"></i> Doadores</h3>
            <div class="d-flex justify-content-end" style="margin-top:-20px ;">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search" style="color:#DA4A4A; border:1px solid #DA4A4A;">
                    <button class="btn btn-outline" type="submit" style="background-color:#DA4A4A ; color:whitesmoke">Procurar</button>
                </form>
            </div>
        </div>


        <div class="container">
        <table class="table table-striped mt-5" style="color:#DA4A4A; ">
            <thead>

                <th>Nome do Doador</th>
                <th>Tipo Sanguinho</th>
                <th>Data de Nascimento</th>
                <th>Local da Doação</th>
                <th>Sexo</th>
                <th>telefone</th>
            </thead>

            <tbody style="color:#DA4A4A ; border:1px solid #DA4A4A; ">

                <tr style="color:#DA4A4A" ;>
                    <td>Custodio</td>
                    <td>B-</td>
                    <td>0307</td>
                    <td>HOpital geral</td>
                    <td>M</td>
                    <td>8461066</td>
                    <td><a href="./Doadores.php" style="color: #DA4A4A;"><i class="fa-solid fa-circle-info"></i></a></td>
                </tr>
            </tbody>


        </table>
    </div>
    </div>
</div>
</div>