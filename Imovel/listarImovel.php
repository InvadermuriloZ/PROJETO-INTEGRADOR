<?php
include"../controle.php";
include"../conexao.php";


$sql = "select * from imovel order by local";
$seleciona = mysqli_query($conexao,$sql);

?>

   <div class="container pag" >
     <div class="text-end">
       <a href="formularioImovel.php">
       <button type="button" class="btn btn-success btn-sm">Cadastrar de Novos Imovéis</button>
       </a>
     </div>
       <h1>Lista dos Imóveis</h1>
       <div class="container text-center">
           <div class="row bg-dark text-light p-2 ">
             <div class="col-2">
               FOTO
             </div>

              <div class="col-1">
               LOCAL
              </div>

              <div class="col-2">
                VALOR
              </div>    
                
              <div class="col-1">
                QUARTOS
              </div>

              <div class="col-1">
             DIMENSÃO
              </div>

              <div class="col-3">
               VAGA/GARAGEM
               </div>

              <div class="col-1">
                CONTROLE
              </div>
            </div>
          <?php
          while ($exibe = mysqli_fetch_array ($seleciona)){
            $idImovel = $exibe['local'];
          ?>

            <div class="row p-1 bg-gradient">
            <div class ="col-2">
                <?php  echo $exibe['foto']; ?>
            </div>
              <div class="col-1">
              <?php  echo $exibe['local']; ?>
              </div>
              <div class="col-2">
              <?php  echo $exibe['valor']; ?>
               
              </div>        
             

              <div class="col-1">
              <?php  echo $exibe['quartos']; ?>
              </div>
              <div class="col-1">
              <?php  echo $exibe['dimensao']; ?>
              </div>
              <div class="col-3">
              <?php  echo $exibe['vagagaragem']; ?>
              </div>

              <div class="col-1">
              <a href="visualizarImovel.php?idImovel=<?php echo $idImovel; ?>"><button type ="button" class="btn btn-success btn-sm">Visualizar</button></a>
              <a href="editarImovel.php?idImovel=<?php echo  $idImovel; ?>"><button type="button" class="btn btn-primary btn-sm">Editar</button></a>
              <a href="excluirImovel.php?idImovel=<?php echo $idImovel; ?>" onclick = "return confirm('Confirma a Exclusão do Imovel?')">
              <button type="button" class="btn btn-danger btn-sm">Excluir</button></a>
              </div>
            
            </div>
            <?php
                }
            ?>

        </div>
    </div>

   <?php
    
   ?>