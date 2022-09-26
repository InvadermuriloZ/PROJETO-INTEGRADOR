<?php
include "controle.php";


?>
        <div class="container pag">
            <h1>Cadastro de Imóvel</h1>
            <form name="form" method="post" action="incluirImovel.php"> 
            <div class="mb-3">
                <label for="local" class="form-label">Local</label>
                <input type="text" class="form-control" id="local" name="local" required>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input type="number" class="form-control" id="valor" name="valor"  required>
            </div>
            <div class="mb-3">
                <label for="quartos" class="form-label">Quartos</label>
                <input type="number" class="form-control" id="quartos" name="quartos" required>
            </div>
            <div class="mb-3">
                <label for="dimensao" class="form-label">Dimensão</label>
                <input type="text" class="form-control" id="dimensao" name="dimensao" required>
            </div>
            <div class="mb-3">
                <label for="vagagaragem" class="form-label">Vagas</label>
                <input type="number" class="form-control" id="vagagaragem" name="vagagaragem" required>
            </div>

            <div class="row">
                    <div class="col text-start">
                        <a href="listarImovel.php"> <button type="button" class="btn btn-warning btn-sm">LISTAR USUÁRIOS</button> </a>
                    </div>
                    <div class="col text-end">

            <button type="submit" class="btn btn-success text-light">Cadastrar</button>
            </form>
        
        </div> 
      
    
 <?php
    include "footer.php";
   ?>