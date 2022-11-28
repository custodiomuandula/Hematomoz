<?php include_once '../../Doador_requisitante/views/head.php'; ?>


<div class="container otherside">

    <h3 class="text-center my-4 novofunc" style="font-weight: 700;"><i class="fa-solid fa-pen-to-square"></i>Agendamento de Doaão</h3>


    <form action="" method="POST">

        <input type="hidden" name="id" >
        <div class="container-fluid d-flex">
            <div class="container">
                <input type="text" class="form-control input1" name="nome" placeholder="Nome Completo" required >
                <input type="date" class="form-control input1" name="data_nascimento" placeholder="Data de Nascimento">
                <input type="text" class="form-control input1" name="nacionalidade" placeholder="Nacionalidade" >
                <div class="container-fluid d-flex p-0">
                    <input type="text" class="form-control input1 me-2" name="tel1" placeholder="Telefone 1" required>
                    <input type="text" class="form-control input1" name="tel2" placeholder="Telefone 2" >
                </div>
               
                <input type="email" class="form-control input1" name="email" placeholder="Email" >
                <div class="container clearfix mb-4 mt-3">
        <select class="form-select w-75 me-2 input1">
            <option value="admin">Selecione o dia que quer fazer a Doacao</option>
            <option value="assistente"></option>
            <option value="medico"></option>
        </select>
        </div>
            </div>

            <div class="container">
                <div class="container-fluid p-0 d-flex">
                    <select class="form-select w-25 me-2 input1" name="sexo" required>
                        <option>Sexo</option>
                        <option  value="M">M</option>
                        <option value="F">F</option>
                    </select>
                  
                </div>
                <select class="form-select me-2 input1" name="tipo_documento" required>
                    <option>Tipo de documento</option>
                    <option value="M">B.I</option>
                    <option value="F">Cedula</option>
                    <option value="F">Cartao de Eleitor</option>
                    <option value="F">NUIT</option>
                </select>
                <input type="text" class="form-control input1" name="nr_documento" placeholder="Numero de Documento" required>
    
                <div class="container-fluid d-flex p-0 mt-2  text-center">
                    <label for="">Consome Alcool ?</label>
                    <label for="" class="ms-4">sim</label> <input type="radio" class="me-2 ms-2 " name="alc" >
                     <label for="">Não</label> <input type="radio" class="ms-2 " name="alc" >
                </div>
                <div class="container-fluid d-flex p-0 mt-2 text-center">
                    <label for="">Possui Anemia ?</label>
                    <label for="" class="ms-4">sim</label> <input type="radio" class="me-2 ms-2 " name="anemia">
                     <label for="">Não</label> <input type="radio" class="ms-2 " name="anemia" >
                </div>
                <div class="container-fluid d-flex p-0 mt-2  text-center">
                    <label for=""> Pesa mas 50k?</label>
                    <label for="" class="ms-4">sim</label> <input type="radio" class="me-2 ms-2 " name="k">
                     <label for="">Não</label> <input type="radio" class="ms-2 " name="k" >
                </div>
                
             
                <input type="text" class="form-control input1" name="nr_documento" placeholder="Morada" required>

                <div class="container clearfix p-0">
                    <button type="submit" class="btn guardar mt-4 float-end"><i class="fa-solid fa-floppy-disk"></i>Agendar</button>
                </div>
            </div>

        </div>

    </form>

</div>

</div>