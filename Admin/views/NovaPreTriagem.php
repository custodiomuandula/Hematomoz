<?php include_once './head2.php'; ?>


<?php
include_once '../models/Doador.php';

$doador = new Doador();
$nome = $doador->selectOne($_GET['id'])->nome;
?>

<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-user-pen"></i> Nova Pre-Triagem</h3>

    <?php if (isset($_SESSION['erro'])) { ?>
        <div class="alert alert-danger alert-dismissible w-50 mx-auto">
            <button type="button" class="btn btn-close" data-bs-dismiss="alert"></button>
            <?php echo $_SESSION['erro'];
            unset($_SESSION['erro']) ?>
        </div>
    <?php } ?>

    <form action="../controllers/AdicionarPreTriagem.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">


        <div class="container">
            <div class="container d-flex align-items-center">

                <div class="container mt-2">
                    <label class="novofunc">Anemico:</label>
                    <select class="form-select input1" name="anemico">
                        <option value="Sim">Sim</option>
                        <option value="Nao">Nao</option>
                    </select>
                </div>
                <div class="container mt-2">
                    <label class="novofunc">Consome Alcool:</label>
                    <select class="form-select input1" name="alcool">
                        <option value="Frequentemente">Frequentemente</option>
                        <option value="Nao">Nao</option>
                        <option value="Ocasionalmente">Ocasionalmente</option>
                    </select>

                </div>
            </div>


            <div class="container d-flex align-items-center">

                <div class="container mt-2">
                    <label class="novofunc">Pratica Exercicios Fisicos:</label>
                    <select class="form-select input1" name="exercicios">
                        <option value="Sim">Sim</option>
                        <option value="Nao">Nao</option>
                        <option value="As Vezes">As Vezes</option>
                    </select>
                </div>

                <div class="container mt-2 d-flex">

                    <input type="text" class="form-control input1 me-2" placeholder="Peso" name="peso">
                    <input type="text" class="form-control input1" placeholder="Altura" name="altura">
                </div>


            </div>

            <div class="container d-flex">
                <div class="container mt-2">
                    <input type="text" class="form-control input1" name="pressao" placeholder="Pressao Arterial">

                </div>

                <div class="container mt-2">
                    <input type="number" class="form-control input1" name="temperatura" placeholder="Temperatura Corporal">

                </div>

            </div>


            <div class="container d-flex align-items-center">

                <div class="container mt-2">
                    <textarea class="form-control input1" style="height: 100px;" placeholder="Historico de Doencas" name="doencas"></textarea>

                </div>
                <div class="container mt-2">
                    <textarea class="form-control input1" style="height: 100px;" placeholder="Habitos Alimentares" name="habitos"></textarea>
                </div>
            </div>

        </div>

        <div class="container clearfix p-0">
            <button type="submit" class="btn guardar mt-4 me-4 float-end"><i class="fa-solid fa-floppy-disk"></i> Registrar</button>
        </div>
    </form>

</div>

</div>