<?php
    include "conexao.php";

    if(isset($_GET['login'])){

        $login = $_GET['login'];
        
        $sql = "delete from usuarios where login = '$login'";
        $excluir = mysqli_query($conexao,$sql);

        if($excluir){
            echo "
                <script>
                    alert('Usuário exluido com Sucesso');
                    window.location = 'listarUsuario.php';
                </script>
            ";
        }
    }

    
?>