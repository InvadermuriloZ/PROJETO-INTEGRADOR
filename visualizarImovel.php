
<?php
//abrindo conexao com o banco de dados
        include"controle.php";
        include"conexao.php";
        $erro = 0;
     //tratamento de erro
        if(isset($_GET['idImovel'])){
            //entrada
            $idImovel = $_GET['idImovel'];

            // processamento - buscando o aluno no banco de dados 
            $sql ="select * from imovel where local =$idImovel";
            $seleciona = mysqli_query($conexao,$sql);
            $exibe = mysqli_fetch_array($seleciona);
           
            // opcional - armazenado o banco em variáveis
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


   <div class="container bg-indigo pag">
        <div class="text-end">
            <a href="listarImovel.php"><button Type="button" class="btn btn-success btn btn-sm">Lista de Imovéis</button></a>
        </div>
      <h2 class="text-dark"> Imóvel </h2>
      <hr>
      <div class="container text-start bg-gradient p-3">
       <?php
        if(!$erro){
            echo "
            <P> ID:$idImovel</P>
            <p> Local:$local</p>
            <p> valor:$valor</p>
            <p> quartos:$quartos</p>
            <p> dimensao:$dimensao</p>
            <p> vagagaragem:$vagagaragem</p>
            ";

        }
        else{
            echo"
            <p>Nenhum aluno foi selecionado. </p>
            <p> Clique em listar Imóveis para selecionar um Imóvel. </p>
            ";
           }
       ?>

      </div>
      <div class="row">
       <div class="col text-start">
           <a href="listarImovel.php"><button type="button" class="btn btn-warning btn btn-sm">Voltar</button></a>
       </div>
       <div class="col text-end">
           <a href="editarImovel.php?idImovel=<?php echo $idImovel; ?>"><button type="button" class="btn btn-primary btn btn-sm">Editar Dados</button></a>
       </div>
      </div>
   </div>



   <?php
    include"footer.php";
   ?>