<?php
include_once '../models/Funcionario.php';


$pessoa = new Funcionario();


if (isset($_POST['nome'])) {
    $search = $pessoa->selectByName($_GET['nome']);
} else {
    $search = $pessoa->selectByPerfil($_GET['perfil']);
}



$conta = 1;
foreach ($search as $key => $value) {
    echo
    "
<tr>
        <td>$conta</td>
        <td>$value->nome</td>
        <td>$value->nr_bi</td>
        <td>$value->data_nascimento</td>
        <td>$value->sexo</td>
        <td>$value->tel1 / $value->tel2</td>
        <td>$value->nacionalidade</td>
        <td>$value->email</td>
        <td>
            <a href=''><i class='fa-solid fa-circle-info'>edit</i></a>
            <a href='./EditarFuncionario.php?id=$value->id'><i class='fa-solid fa-pen-to-square'></i></a>
            <a href='' data-bs-toggle='modal' data-bs-target='#delete$value->id'><i class='fa-solid fa-trash'></i></a>
        </td>
    </tr>

    <div class='modal' id='delete$value->id'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h4 class='modal-title'> <i class='fa-solid fa-trash-can'></i> Apagar Doador</h4>
                </div>

                <div class='modal-body'>
                    Deseja apagar o Doador $value->nome ?
                </div>

                <div class='modal-footer'>
                    <a href='../controllers/DeleteFuncionarioController.php?id=$value->id' class='btn btn-danger'>Sim</a>
                    <button type='button' data-bs-dismiss='modal' class='btn btn-secondary'>Não</button>
                </div>
            </div>

        </div>
    </div>
";
    $conta++;
}
