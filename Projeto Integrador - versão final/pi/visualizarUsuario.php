<?php
    include "conexao.php";
    include "controle.php";
    

    if(isset($_GET['login'])){

        $login = $_GET['login'];
        
        $sql = "select * from usuarios where login = '$login'";
        $seleciona = mysqli_query($conexao,$sql);
        $exibe = mysqli_fetch_array($seleciona);

        $login = $exibe['login'];
        $nome = $exibe['nome'];
        $senha = $exibe['senha'];
        $nivel = $exibe['nivel'];
        $email = $exibe['email'];
        $telefone = $exibe['telefone'];

    
?>
    <div class="container pag">
        <div class="text-end">
            <a href="listarUsuario.php"> <button type="button" class="btn btn-success btn-sm">LISTAR USUÁRIOS</button> </a>
        </div>
        <h2>Usuário: <?php echo $nome; ?></h2>
        <hr>
        <div class="container text-start bg-gradient p-3">
            
                <div class="col-10">
                    <?php
                    
                        echo "
                            <p> Login: $login </p>
                            <p> Nome: $nome </p>                    
                            <p> Senha: $senha </p>
                            <p> Nível: $nivel </p>                                       
                            <p> E-mail: $email </p>                                       
                            <p> Telefone: $telefone </p>                                       
                        ";
                    
            
                    ?>  
                </div>
            </div>                
                     
        </div>
        <div class="row">
            <div class="col text-start">
                <a href="listarUsuario.php"> <button type="button" class="btn btn-warning btn-sm">VOLTAR</button> </a>
            </div>
            <div class="col">
            <a href="editarSenha.php?login=<?php echo $login ?>"> <button type="button" class="btn btn-danger btn-sm botao">ALTERAR SENHA</button></a>
            </div>

            <div class="col text-end">
                <a href="editarUsuario.php?login=<?php echo $login ?>"><button type="button" class="btn btn-primary btn-sm botao">EDITAR DADOS</button></a>
            </div>
        </div>
    </div>   

<?php

    }
    else{
        echo "
            <p> Esta é uma página de tratamento de dados. </p>
            <p> Clique <a href='listarUsuario01.php'>aqui</a> para selecionar um Usuário. </p>
        ";   
    }
?>

<?php
    include"footer.php";
?>
   