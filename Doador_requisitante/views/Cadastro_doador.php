<?php include './head.php';
?>
<div class="body">
    <div class="container col-sm-10 p-3 ">

        <h3 class="text-center"><i class="fa-solid fa-user-plus"></i> Preecha os Dados</h3>

        <div class="mt-2">
            <form action="" method="post" class="">

                <div class="d-flex">

                    <div class="container w-40">

                        <div class="container">
                            <label class="form-label">Nome:</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                        <div class="container">
                            <label class="form-label">Apelido:</label>
                            <input type="text" class="form-control" name="apelido" required>
                        </div>
                        <div class="container">
                            <label class="form-label">Data de Nascimento:</label>
                            <input type="date" class="form-control" name="data_nasc" required>
                        </div>
                        <div class="container">
                            <label class="form-label">Nacionalidade:</label>
                            <input type="text" class="form-control" name="nacionalidade" required>
                        </div>
                        <div class="container">
                        <label class="form-label">Ducumento:</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">BI</option>
                                <option value="2">Cedula</option>
                                <option value="3">Ctão de eleitor</option>
                            </select>
                        </div>
                        <div class="container">
                            <label class="form-label">Sexo:</label>
                            <select name="sexo" class="form-select">
                                <option value="M"></option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>

                    </div>


                    <div class="container">
                        <div class="container">
                            <label class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="container">
                            <label class="form-label">Contactos:</label>
                            <input type="number" class="form-control" name="contactos" required>
                        </div>

                        <div class="container">
                            <label class="form-label">Contacto Alternativo:</label>
                            <input type="number" class="form-control" name="" required>
                        </div>
                        <div class="container">
                            <label class="form-label">Morada:</label>
                            <input type="text" class="form-control" name="" required>
                        </div>
                        <div class="container">
                            <label class="form-label">Senha:</label>
                            <input type="password" class="form-control" name="" required>
                        </div>
                        <div class="container">
                            <label class="form-label">Confirme a Senha:</label>
                            <input type="password" class="form-control" name="" required>
                        </div>

                    </div>
                </div>
        </div>

        <div class="container mt-5 b-doted" style="padding-left:450px ;">
            <button class="btn btn-success me-5 " type="submit" style="background-color:#55B1B8 !important ;">Registrar</button>
            <button class="btn btn-danger ms-5">Cancelar</button>
        </div>
        </form>
    </div>


</div>
</div>