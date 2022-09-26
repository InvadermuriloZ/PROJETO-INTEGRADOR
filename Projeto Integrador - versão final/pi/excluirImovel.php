<?php
include"conexao.php";

// tratamento de erro
  if(isset($_GET['local'])){
      //entrada
      $local = $_GET['local'];  
    
      //processamento
      $sql = "delete from imovel where local = '$local'";
      $excluir = mysqli_query($conexao,$sql); 

      //saida
      if($excluir){
          echo "
          <script>
            alert ('Imóvel excluido com sucesso!');
            window.location = 'listarImovel.php';
          
          </script>
          "; 
        }

        else{
            echo "
            <p> Sistema temporariamente fora do ar. Tente novamnente mais tarde .</p>
            <p> Entre em contato com administrador do sistema.</p>
            ";
            echo mysqli_error($conexao);
        }

  }
    else{
        echo" 
        <p>Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href ='listarImovel.php'>aqui</a> para Excluir um imóvel</p>
    ";
      }
  
?>