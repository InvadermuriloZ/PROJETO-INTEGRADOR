<?php

include "controle.php";
include "conexao.php";

$erro = 0;
if(isset($_GET['local'])){
    $local = $_GET['local'];

    $sql = "select * from imovel where local = '$local'";
    $seleciona = mysqli_query($conexao,$sql);
    $exibe = mysqli_fetch_array($seleciona);

    $local = $exibe['local'];
    $foto = $exibe['foto'];
    $valor = $exibe['valor'];
    $quartos = $exibe['quartos'];
    $dimensao = $exibe['dimensao'];
    $vagagaragem = $exibe['vagagaragem'];

}
else{
    $erro++;
}

?>


        <div class="container pag">    
            <h1> Editar dados do Imóvel </h1>
            <hr>
           <?php
         
         if ($erro){
             echo"
             <p class = 'p-5'>
             Nenhum Imóvel foi selecionado. Clique no botão voltar para selecionar o aluno que deseja editar.

             </p>
             ";
         }
         else{

            ?>
            
            
            <form name="form" method="post" action="updateImovel.php">
                <input type = "hidden" name = "local" value = "<?php  echo $local ?>" >
                <div class="mb-3">
                    <label for="local" class="form-label">local</label>
                    <input type="text" class="form-control" id="local" name="local" value = "<?php echo $local ?>" required>
                </div>
                <div class="mb-3">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="number" class="form-control" id="valor" name="valor" value = "<?php echo $valor?>" required>
                </div>
                <div class="mb-3">
                    <label for="quartos" class="form-label">Quartos</label>
                    <input type="number" class="form-control" id="quartos" name="quartos" value = "<?php echo $quartos ?>" required>
                </div>
                <div class="mb-3">
                    <label for="dimensao" class="form-label">Dimensão</label>
                    <input type="text" class="form-control" id="dimensao" name="dimensao"value = "<?php echo $dimensao ?>" required>
                </div>
                <div class="mb-3">
                    <label for="vagagaragem" class="form-label">Vagagaragem</label>
                    <input type="number" class="form-control" id="vagagaragem" name="vagagaragem" value = "<?php echo $vagagaragem ?>"  >
                </div>
                
                <?php
              
                   }
                   ?> 

                   
                <div class="row">
       <div class="col text-start">
           <a href="listarImovel.php"><button type="button" class="btn btn-warning btn btn-sm">Voltar</button></a>
       </div>
       <div class="col text-end">
          <button type="submit" class="btn btn-primary btn btn-sm">Alterar Dados</button></a>
       </div>
      </div>
            </form>           
        </div>


   <?php
   
   ?>
   