<?php

include"../conexao.php";

if(isset($_POST['local'])){
        // Entrada

      
        $local = trim($_POST['local']);
        $valor = trim($_POST['valor']);
        $quartos = trim($_POST['quartos']);
        $dimensao = trim($_POST ['dimensao']);
        $vagagaragem = trim($_POST ['vagagaragem']);



        //Processamento
        $sql = "update imovel set local = '$local', valor = '$valor', quartos = '$quartos', dimensao = '$dimensao', vagagaragem = '$vagagaragem' where
        local = ' $local'";
        $alterar = mysqli_query($conexao,$sql);

       // Saida
       if($alterar){
          echo "
          
          <script> alert (' Imóvel Atualizado com sucesso! ');
          window.location = 'listarImovel.php';
          </script>

          ";
       }
       else{
       echo 
            "<p> Sistema temporariamente fora do ar. Tente novamente mais tarde. </p>
             <p> Entra em contato com o administrador do site.</p>

          ";
          echo mysqli_error($conexao);

       }
    }
       else{
        echo"
        <p> Está é uma página de tratamento de dados. </p>
        <p> Clique <a href= 'listarImovel.php'> aqui </a> para selecionar um imóvel. </p>

        ";
        }


?>