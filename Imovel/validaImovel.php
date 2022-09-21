<?php
include"../conexao.php";


 if(isset($_POST['local'])){
    $login = trim ($_POST['login']);
    $senha = trim ($_POST['senha']);

    $sql = "select *from imovel where local
    ='$login' and senha = '$senha'";
    $testeLogin = mysqli_query($conexao,$sql);
    $existe = mysqli_num_rows($testeLogin);

           
            if($existe){
            $dados = mysqli_fetch_array($testeLogin);
            $local = $dados['local'];
            $valor = $dados['valor'];
            $quartos = $dados['quartos'];
            $dimensao = $dados['dimensao'];
            $vagagaragem = $dados['vagagaragem'];

    

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['local'] = $local;        
            $_SESSION['valor'] = $valor;        
            $_SESSION['quartos'] = $quartos;        
            $_SESSION['dimensao'] = $dimensao;        
            $_SESSION['vagagaragem'] = $vagagaragem;        
            
    
            if ($nivel == 'adm'){
                    header('location:adm.php');
            }
        else{
            header('location:index.php');
        }
 }


    else{
        echo " Usúario e senha inválidos.";
 }
    
    



 }


?>