<?php
include "conexao.php";


 if(isset($_POST['login'])){
    $login = trim ($_POST['login']);
    $senha = trim ($_POST['senha']);

    $sql = "select *from usuarios where login
    ='$login' and senha = '$senha'";
    $testeLogin = mysqli_query($conexao,$sql);
    $existe = mysqli_num_rows($testeLogin);

           
            if($existe){
            $dados = mysqli_fetch_array($testeLogin);
            $nome = $dados['nome'];
            $nivel = $dados['nivel'];
            $email = $dados['email'];
            $telefone = $dados['telefone'];

    

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['login'] = $login;        
            $_SESSION['nome'] = $nome;                
            $_SESSION['nivel'] = $nivel;        
            $_SESSION['email'] = $email;        
            $_SESSION['telefone'] = $telefone;        
            
    
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