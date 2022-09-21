<?php
include"../controle.php";


?>
        <div class="container pag">
            <h1>Cadastro de Imóvel</h1>
            <form name="form" method="post" action="incluirImovel.php"> 
            <div class="mb-3">
                <label for="local" class="form-label">Local</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input type="number" class="form-control" id="valor" name="valor"  required>
            </div>
            <div class="mb-3">
                <label for="quarto" class="form-label">Quartos</label>
                <input type="number" class="form-control" id="quarto" name="quarto" required>
            </div>
            <div class="mb-3">
                <label for="dimensao" class="form-label">Dimensão</label>
                <input type="text" class="form-control" id="dimensao" name="dimensao" required>
            </div>
            <div class="mb-3">
                <label for="vagas" class="form-label">Vagas</label>
                <input type="number" class="form-control" id="vagas" name="vagas" required>
            </div>
            <button type="submit" class="btn btn-success text-light">Cadastrar</button>
            </form>
        
        </div> 
      
    
 <?php
    include"../footer.php";
   ?>