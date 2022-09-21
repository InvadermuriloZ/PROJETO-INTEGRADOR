<?php

    include"conexao.php";

    if(isset($_POST['nome'])){
   
        $login = trim($_POST['login']);
        $senha = trim($_POST['senha']);
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $nivel = 'usu';
        
     
        $sql = "insert into usuarios(login,senha,nome,email,nivel,foto) values('$login','$senha','$nome','$email','$nivel)";
        $incluir = mysqli_query($conexao,$sql);

        if($incluir){
            echo "
                <script>
                    alert('Usuário cadastrado com sucesso!');
                    window.location = 'listarUsuario01.php';
                </script>
            ";
        }
      
    }
   
?>

<?php
include"footer.php";
?>