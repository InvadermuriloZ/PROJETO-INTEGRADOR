<?php

include"conexao.php";

if(isset($_POST['idImovel'])){
        // Entrada

        $idImovel = trim($_POST['idImovel']);
        $local = trim($_POST['local']);
        $foto = trim($_POST['foto']);
        $valor = trim($_POST['valor']);
        $quartos = trim($_POST['quartos']);
        $dimensao = trim($_POST ['dimensao']);
        $vagagaragem = trim($_POST ['vagagaragem']);



        //Processamento
        $sql = "update imovel set local = '$local', foto = '$foto', valor = '$valor', quartos = '$quartos', dimensao = '$dimensao' where
        id = $idImovel ";
        $alterar = mysqli_query($conexao,$sql);

       // Saida
       if($alterar){
          echo "
          
          <script> alert (' Aluno Atualizado com sucesso! ');
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
        <p> Clique <a href= 'listarImovel.php'> aqui </a> para selecionar um aluno. </p>

        ";
        }


?>

<?php
include"footer.php";
?>