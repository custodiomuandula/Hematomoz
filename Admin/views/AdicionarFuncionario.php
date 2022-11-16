<?php
include 'head.php';
?>
<div class="dashboard-content">
                  
    <div class="mt-2">
    <h3 class="text-center"><i class="fa-solid fa-user-plus"></i> Adicionar Novo Funcionario</h3>
        <form action="" method="post" class="d-flex">

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
                    <label class="form-label">Numero de BI:</label>
                    <input type="text" class="form-control" name="nrBI" required>
                </div>
                <div class="container">
                    <label class="form-label">Sexo:</label>
                    <select name="sexo" class="form-select">
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select>
                </div>
                <div class="container">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
            </div>


            <div class="container">
                <div class="container">
                    <label class="form-label">Contactos:</label>
                    <input type="text" class="form-control" name="contactos" required>
                </div>

                <div class="container">
                    <div class="container">
                        <label class="form-label">Contactos:</label>
                        <input type="text" class="form-control" name="contactos" required>
                    </div>
                    <div class="container">
                        <label class="form-label">Morada:</label>
                        <textarea name="morada" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    
                    <div class="container mt-2">
                    <label class="form-label">Perfil:</label>
                    <select name="perfil" class="form-select">
                        <option value="admin">Administrador</option>
                        <option value="gestor">Medico</option>
                        <option value="gestor">Assistente</option>
                    </select>
                </div>

                    <div class="container my-3">
                        <button class="btn btn-success" type="submit">Registrar</button>
                        <button class="btn btn-danger">Cancelar</button>
                    </div>
                </div>
        </form>

    </div>

</div>