<?php
include '../../Doador_requisitante/views/head.php'
?>

<div class="container col-sm-10 p-3">

<h3 class="text-center  m-4 "><i class="fa-solid fa-user-plus"></i>Requisições de Bolsas de Sangue</h3>

<div class="mt-2" >
    <form action="" method="post" class="d-flex">
        
        <div class="container w-40">

            <div class="container">
                <label class="form-label"> <i class="fa-solid fa-landmark"></i> Nome da Instituicao: </label>
                <input  type="text" name="nome" required   class="form-control">
            </div>
    
            <div class="container">
                <label class="form-label"><i class="fa-regular fa-envelope"></i> Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="container">
                <label class="form-label"><i class="fa-solid fa-phone"></i> Contactos:</label>
                <input type="text" class="form-control" name="contactos" required>
            </div>
            <div class="container">
                <label class="form-label"><i class="fa-solid fa-house"></i> Endereço</label>
                <input type="text" class="form-control" name="contactos" required>
            </div>
            <div class="container"  class="mt-4 w-25" >
                <label class="form-label">Carregar o documento Compravativo:</label>
                <input input type="file" name="documento" class="upload mt-1" style="background-color:#55B1B8;">

            </div>

           
        </div>


        <div class="container">
            
        <div class="container">
                <label class="form-label"> <i class="fa-solid fa-comment"></i> Assunto e Dircrição</label>
                <textarea name="morada" cols="30" rows="10" class="form-control" required></textarea>
            </div>
           
          
            <div class="container my-3">
            <div class="container clearfix p-0">
                    <button type="submit" class="btn guardar mt-4 float-end ms-5"><i class="fa-solid fa-floppy-disk"></i> Enviar</button>
                
                    <button type="submit" class="btn cancelar mt-4 float-end"><i class="fa-solid fa-floppy-disk"> </i> Cancelar</button>
                </div>
                </div>
                
            </div>
        </div>
    </form>

</div>

</div>
