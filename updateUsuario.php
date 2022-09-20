<?php

    include "conexao.php";

    if(isset($_POST['login'])){

        $login = trim($_POST['login']);
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        

        $sql = "update usuarios set nome = '$nome', email = '$email' where login = '$login'";
        $alterar = mysqli_query($conexao,$sql);

        if($alterar){
            echo "
                <script>
                    alert('Usuario Atualizado com sucesso!');
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

?>