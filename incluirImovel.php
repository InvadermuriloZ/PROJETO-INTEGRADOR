<?php
  
  include"../conexao.php";

  if(isset($_POST['local'])){

    //entrada
    $local = trim($_POST['local']);
    $foto = trim($_POST['foto']);
    $valor = trim($_POST['valor']);
    $quartos = trim($_POST['quartos']);
    $dimensao = trim($_POST['dimensao']);
    $vagagaragem = trim($_POST['vagagaragem']);
    
    //processamento - incluir no banco de dados 
    $sql = "Insert into imovel(local,foto,valor,quartos,dimensao,vagagaragem)
            values('$local' , '$foto' , '$valor' , '$quartos' , '$dimensao','$vagagaragem')";
            $incluir = mysqli_query($conexao,$sql);

            //saida - feedback ao usuario
            if($incluir){
                echo "
                <script>
                 alert('Imóvel cadastrado com sucesso!');
                 window.location = 'listarImovel.php';
                
                </script>
                ";
            }

            else{
                echo"
                <p> Sistema temporariamente fora do ar.Tente
                novamente mais tarde.</p>
                <p> Entre em contato com o administrador do Sistema.</p>
                
                ";
                echo mysqli_error($conexao);
            }

  }
            else{
              echo "
              <p> Esta é uma página de tratamento de dados.</p>
              <p> Clique <a href = 'formularioImovel.php'>aqui<a/> para incluir um aluno. 
              </p>
              ";
            }
          






?>