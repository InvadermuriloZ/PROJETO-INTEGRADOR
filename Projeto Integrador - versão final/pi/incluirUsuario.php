<?php

    include "conexao.php";

    if(isset($_POST['login'])){
   
        $login = trim($_POST['login']);
        $nome = trim($_POST['nome']);
        $senha = trim($_POST['senha']);
        $nivel = 'usu';
        $email = trim($_POST['email']);
        $telefone = trim($_POST['telefone']);
        
        
     
        $sql = "insert into usuarios(login,nome,senha,nivel,email,telefone) values('$login','$nome','$senha','$nivel','$email','$telefone')";
        $incluir = mysqli_query($conexao,$sql);

        if($incluir){
            echo "
                <script>
                    alert('Usuário cadastrado com sucesso!');
                    window.location = 'listarUsuario.php';
                </script>
            ";
        }

        else{
            echo "
                <p> Sistema temporariamente fora do ar. Tente novamente mais tarde. </p>
                <p> Entre em contato com o administrador do Sistema. </p>
            ";
            echo mysqli_error($conexao);
        }


    }
    else{
        echo "
        <p> Esta é uma página de tratamento de dados. </p>
        <p> Clique <a href='formularioUsuario.php'>aqui</a> para incluir um Usuário. </p>
    ";  
    }

    
















?>