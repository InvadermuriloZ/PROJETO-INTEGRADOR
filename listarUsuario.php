<?php
    include "conexao.php";
    include "controle.php";
    
    
    $sql = "select * from usuarios order by nome";
    $seleciona = mysqli_query($conexao,$sql);
    
?>

        <div class="container bg-info pag">
            <div class="text-end">
                <a href="loginUsuario.php"> <button type="button" class="btn btn-success btn-sm">NOVO</button> </a>
            </div>
            <h2>Lista de Usuários</h2>
            <div class="container text-center">
                <div class="row bg-dark text-light espaco">
                    <div class="col-3">
                            EMAIL
                        </div>    
                    <div class="col-1">
                        SENHA
                    </div>
                    <div class="col-2">
                        NOME
                    </div>
                    
                    <div class="col-1">
                        NIVEL
                    </div>
                    <div class="col-3">
                        CONTROLE
                    </div>
                </div>
                <?php                     
                    while ($exibe = mysqli_fetch_array($seleciona)){
                        $nome = $exibe['nome'];                        
                ?>
                    <div class="col-1">
                        ******
                    </div>
                    <div class="col-2">
                        <?php echo $exibe['nome']?>
                    </div>
                    <div class="col-3">
                        <?php echo $exibe['email']?>
                    </div>
                    <div class="col-3">
                        <a href="listarUsuario.php?login=<?php echo $login ?>"><button type="button" class="btn btn-success btn-sm botao">Listar</button></a>
                        <a href="cadastrarUsuario.php?login=<?php echo $login ?>"><button type="button" class="btn btn-primary btn-sm botao">Cadastrar</button></a>
                        <a href="loginUsuario.php?login=<?php echo $login ?>" onclick="return confirm('Confirma o Login do Usuário?')" > <button type="button" class="btn btn-danger btn-sm">Login</button> </a>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>  

   